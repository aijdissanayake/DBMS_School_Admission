<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User implements Authenticatable
{
    public $id;
    public $name;
    public $username;
    public $role;
    public $password;

    private static $roles = array(
                1 => 'Administrator',
                2 => 'school_operator'
        );

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'name', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    'password', 'remember_token',
    ];

    // Authenticatable methods
    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return 'username';
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->username;
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken()
    {
        return $this->{$this->getRememberTokenName()};
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string  $value
     * @return void
     */
    public function setRememberToken($value)
    {
        $this->{$this->getRememberTokenName()} = $value;
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    public function save(){
     return User::create($this->name, $this->username, $this->password,$this->role);
    }

 public static function all(){
    $result = DB::select("Select id,name, username,role, password FROM user");
    $users = array();
    foreach ($result as $r) {
        $u = new User();
        $u->id = $r->id;
        $u->username = $r->username;
        $u->name =$r->name;
        $u->role = User::$roles[$r->role];
        $u->password = $r->password;

        if($u->role_id == 2 && isset($u->school_id)){
            $school = School::findByID($u->school_id);
            if($school){
                $u->school = $school->school;
            }
        }
        array_push($users,$u);
    }
    return $users;
}

public static function create($name, $username,$password,$role){
    $result = DB::statement("INSERT INTO user(name, username,password,role) values (:name, :username,:password,:role)",
      array(
            'name'=>$name,
          'username' => $username,
          'password' => $password,
          'role' => $role_id
          ));
    return $result;
}

public static function find($id){
    $result = DB::select("SELECT * FROM user WHERE $id = :id", array('id' => $id));
    if(count($result) == 1){
        $u = new User();
        $u->id = $result[0]->id;
        $u->username = $result[0]->username;
        $u->password = $result[0]->password;
        $u->role = $result[0]->role;
        return $u;
    }else{
        return null;
    }
}

public static function authenticate($username, $password){

    $r = DB::select("SELECT id,username,role,school_id FROM user where username=:username and password=:password",
        array(
            'username' => $username,
            'password' => $password
            ));

    if(count($r) != 1){
        return null;
    }

    $u = new User();
    $u->id = $r[0]->id;
    $u->username = $r[0]->username;
    $u->password = $password;
    $u->role_id =$r[0]->role;
    $u->role = User::$roles[$r[0]->role];
    $u->school_id = $r[0]->school_id;
    if($u->role_id == 2 && isset($u->school_id)){
        $school = School::findByID($u->school_id);
        if($school){
            $u->school = $school->school;
        }
    }

    return $u;
}

}
