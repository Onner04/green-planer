<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::create([
        'name'=>'admin',
        'email'=>'daothanh2624@gmail.com',
        'password'=>Hash::make('00000000'),
        'role'=> 1,
       ]);
    }
}
