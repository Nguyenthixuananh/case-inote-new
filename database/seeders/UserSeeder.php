<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->name = "Xuan Anh 1";
        $user->email = "xa1@gmail.com";
        $user->password = Hash::make(123456);
        $user->save();

        $user = new User();
        $user->name = "Xuan Anh 2";
        $user->email = "xa2@gmail.com";
        $user->password = Hash::make(123456);
        $user->save();

        $user = new User();
        $user->name = "Xuan Anh 3";
        $user->email = "xa3@gmail.com";
        $user->password = Hash::make(123456);
        $user->save();
    }
}
