<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        User::truncate();

        DB::table('users')->insert([
            'name' => ('sayed221'),
            'status' => (1),
            'email' => ('sayed2211@gmail.com'),
            'password' => Hash::make('1234567890'),
        ]);
    }
}
