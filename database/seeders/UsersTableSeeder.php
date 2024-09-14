<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Ricardo Miguel',
                'email' => 'ricardo.miguel@brgroupe.com',
                'password' => Hash::make('BrGroupe2024.'), 
            ],
            [
                'name' => 'Nicolas Marra',
                'email' => 'nicolas.marra@brgroupe.com',
                'password' => Hash::make('BrGroupe2024..'),
            ],
            [
                'name' => 'Kelly Neto',
                'email' => 'kelly.neto@brgroupe.com',
                'password' => Hash::make('BrGroupe2024...'),
            ],
        ]);
    }
}
