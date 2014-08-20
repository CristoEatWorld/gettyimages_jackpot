<?php

class UserTableSeeder extends Seeder {
 
    public function run()
    {
        $users = [
            ['nick' => 'admin', 'password' => Hash::make('1234'), 'email' => 'admin@admin.com']
        ];
 
        DB::table('users')->insert($users);
    }
 
}
