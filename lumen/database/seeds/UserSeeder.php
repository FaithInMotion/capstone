<?php

class UserSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create([
              'name' => 'Test User 1'
            , 'password' => 'password1'
        ]);
    }

}