<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\DB;

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
        return 'id';
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->id;
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
    $result = DB::select("Select id,name, username,role, password FROM users");
    $users = array();
    foreach ($result as $r) {
        $u = new User();
        $u->id = $r->id;
        $u->username = $r->username;
        $u->name =$r->name;
        $u->role = $r->role;
        $u->password = $r->password;

        array_push($users,$u);
    }
    return $users;
}

public static function create($name, $username,$password,$role){
    $result = DB::statement("INSERT INTO users(name, username,password,role) values (:name, :username,:password,:role)",
      array(
        'name'=>$name,
        'username' => $username,
        'password' => $password,
        'role' => $role
        ));
    return $result;
}

public static function find($id){
    $result = DB::select("SELECT * FROM user WHERE $id = :id", array('id' => $id));
    if(count($result) == 1){
        $u = new User();
        $u->id = $result[0]->id;
        $u->name = $result[0]->name;
        $u->username = $result[0]->username;
        $u->password = $result[0]->password;
        $u->role = $result[0]->role;
        return $u;
    }else{
        return null;
    }
}

public static function authenticate($username){

    $r = DB::select("SELECT id,name,username,password, role FROM users where username=?",[$username]);


    if(count($r) != 1){
        return null;
    }

    $u = new User();
    $u->id = $r[0]->id;
    $u->username = $r[0]->username;
    $u->password = $r[0]->password;
    $u->role = $r[0]->role;
    
    return $u;
}

}
