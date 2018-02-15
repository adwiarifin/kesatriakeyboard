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
        $user = new App\User();
        $user->name = 'Adwi Arifin';
        $user->email = 'adwiarifin@gmail.com';
        $user->password = Hash::make('password');
        $user->role_id = 1;
        $user->save();
    }
}
