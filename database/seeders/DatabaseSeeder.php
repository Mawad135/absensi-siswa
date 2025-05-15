<?php

namespace Database\Seeders;

use App\Models\User;
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
            'name' => 'admin',
            'username' => 'admin',
            'password' => Hash::make('123'),
            'level' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => 'guru',
            'username' => 'guru',
            'password' => Hash::make('123'),
            'level' => 'guru',
        ]);

        DB::table('users')->insert([
            'name' => 'siswa',
            'username' => 'siswa',
            'password' => Hash::make('123'),
            'level' => 'siswa',
        ]);
    }

}