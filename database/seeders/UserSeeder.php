<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // $user = new User;
        // $user->name = "islam";
        // $user->email = "islam@test.com";
        // $user->password = Hash::make(12345678);
        // $user->save();

        $user = new User;
        $user->name = "tarik";
        $user->email = "tarik@propriodirect.com";
        $user->password = Hash::make(123456789);
        $user->save();

        // $user = new User;
        // $user->name = "mostafa";
        // $user->email = "mostafa@test.com";
        // $user->password = Hash::make(12345678);
        // $user->save();

    }
}
