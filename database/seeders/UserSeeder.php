<?php

namespace Database\Seeders;

use App\Models\User;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'first_name' => 'admin',
            'last_name' => 'company',
            'email' => 'admin@admin.com',
            'phone' => '0' . random_int(00000000000, 99999999999),
            'mobile' => '0' . random_int(00000000000, 99999999999),
            'password' => Hash::make('password123'),
            'role' => 'admin',
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'username' => 'user',
            'first_name' => 'user',
            'last_name' => 'company',
            'email' => 'user@user.com',
            'phone' => '0' . random_int(00000000000, 99999999999),
            'mobile' => '0' . random_int(00000000000, 99999999999),
            'password' => Hash::make('password123'),
            'role' => 'operator',
            'remember_token' => Str::random(10),
        ]);
    }
}
