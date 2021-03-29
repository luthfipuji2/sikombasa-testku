<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//use Hash;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin12345'),
            'role' => 'admin',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Klien',
            'email' => 'klien@gmail.com',
            'password' => Hash::make('klien12345'),
            'role' => 'klien',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Translator',
            'email' => 'translator@gmail.com',
            'password' => Hash::make('translator12345'),
            'role' => 'translator',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
    }
}
