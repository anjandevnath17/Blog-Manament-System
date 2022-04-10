<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'role_id' => '1',
            'name' => 'Anjan  Devnath',
            'username' => 'admin',
            'email'=> 'admin@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::insert( [
            'role_id' => '2',
            'name' => 'User-2',
            'username' => 'user2',
            'email'=> 'user2@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
