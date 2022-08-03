<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new User;
        $user1->name = 'User 1';
        $user1->username = 'user1';
        $user1->email = 'user1@email.com';
        $user1->password = 'user1pass';
        $user1->save();

        $user2 = new User;
        $user2->name = 'User 2';
        $user2->username = 'user2';
        $user2->email = 'user2@email.com';
        $user2->password = 'user2pass';
        $user2->save();

        $user3 = new User;
        $user3->name = 'User 3';
        $user3->username = 'user3';
        $user3->email = 'user3@email.com';
        $user3->password = 'user3pass';
        $user3->save();

        $user4 = new User;
        $user4->name = 'User 4';
        $user4->username = 'user4';
        $user4->email = 'user4@email.com';
        $user4->password = 'user4pass';
        $user4->save();

        $user5 = new User;
        $user5->name = 'User 5';
        $user5->username = 'user5';
        $user5->email = 'user5@email.com';
        $user5->password = 'user5pass';
        $user5->save();
    }
}
