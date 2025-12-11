<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'nama' => 'Muhamad Raihan',
            'email' => 'raihan@gmail.com',
            'role' => 'Ketua',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);

        User::create([
            'nama' => 'M. Maulidan Khodhawa',
            'email' => 'didan@gmail.com',
            'role' => 'Anggota',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);

        User::create([
            'nama' => 'Rizal Fadillah Gunawan',
            'email' => 'rizal@gmail.com',
            'role' => 'Anggota',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);

        User::create([
            'nama' => 'Nilna Ulya Syarifah',
            'email' => 'nilna@gmail.com',
            'role' => 'Anggota',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);

        User::create([
            'nama' => 'Sifa Salsabilla',
            'email' => 'sifa@gmail.com',
            'role' => 'Anggota',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);
    }
}
