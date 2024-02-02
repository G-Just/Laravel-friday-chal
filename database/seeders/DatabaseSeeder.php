<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'lname' => 'Admin',
            'email' => 'admin@admin.com',
            'admin' => true,
            'password' => Hash::make('admin'),
        ]);
        DB::table('users')->insert([
            'name' => 'John',
            'lname' => 'Doe',
            'email' => 'email@gmail.com',
            'admin' => false,
            'password' => Hash::make('123'),
        ]);
    }
}
