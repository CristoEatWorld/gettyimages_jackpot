<?php

class UserTableSeeder extends Seeder {
 
    public function run()
    {
        $users = [
            ['nick' => 'clazyegg', 'password' => Hash::make('blabla12'), 'email' => 'clazyegg@gmail.com']
        ];
 
        DB::table('users')->insert($users);
    }
 
}
