<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(10),
            'username' => '61',
            'password' => bcrypt('secret'),
            'role' => '2',
        ]);

        DB::table('users')->insert([
            'name' => str_random(10),
            'username' => '477',
            'password' => bcrypt('secret'),
            'role' => '2',
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'username' => '17',
            'password' => bcrypt('secret'),
            'role' => '2',
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'username' => '441',
            'password' => bcrypt('secret'),
            'role' => '2',
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'username' => '991',
            'password' => bcrypt('secret'),
            'role' => '2',
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'username' => '419',
            'password' => bcrypt('secret'),
            'role' => '2',
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'username' => '613',
            'password' => bcrypt('secret'),
            'role' => '2',
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'username' => '237',
            'password' => bcrypt('secret'),
            'role' => '2',
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'username' => '597',
            'password' => bcrypt('secret'),
            'role' => '2',
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'username' => 'admin',
            'password' => bcrypt('password'),
            'role' => '1',
        ]);
    }
}
