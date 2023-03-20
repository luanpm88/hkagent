<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // // Default user for development
        // \App\Models\User::where('email', '=', 'agent@bonnuoclongnhien.com')->delete();
        // \App\Models\User::factory()->create([
        //     'name' => 'Agent',
        //     'email' => 'agent@bonnuoclongnhien.com',
        //     'password' => \Hash::make('123456'),
        // ]);

        // // Dung Đỗ
        // \App\Models\User::where('email', '=', 'dungdo@bonnuoclongnhien.com')->delete();
        // \App\Models\User::factory()->create([
        //     'name' => 'Dung Đỗ',
        //     'email' => 'dungdo@bonnuoclongnhien.com',
        //     'password' => \Hash::make('123456@'),
        // ]);

        // // Bằng Đỗ
        // \App\Models\User::where('email', '=', 'bangdo@bonnuoclongnhien.com')->delete();
        // \App\Models\User::factory()->create([
        //     'name' => 'Bằng Đỗ',
        //     'email' => 'bangdo@bonnuoclongnhien.com',
        //     'password' => \Hash::make('123456&'),
        // ]);
    }
}
