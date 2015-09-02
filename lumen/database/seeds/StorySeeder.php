<?php

class UserSeeder extends Seeder {

    public function run()
    {
        DB::table('user_stories')->delete();

        $users = [
            [
                  'name' => 'Test User 2'
                , 'password' => 'password1'
            ],

            [
                  'name' => 'Test User 3'
                , 'password' => 'password1'
            ]
        ];

        foreach ($users as $user)
        {
            $user = User::create($user);

            /*
             * TODO: From here, you will create a
             *  $story = new User_Story
             * But since that model hasn't been created yet,
             * we can't do it right now
             */
        }
    }

}