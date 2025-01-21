<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\produk;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'username' => 'superadmin',
            'email' => 'superadmin123@gmail.com',
            'role' => 'superadmin',
            'password' => Hash::make('superadmin123')
        ]);


        produk::create([
            'namaProduk' => 'soklin',
            'harga' => 500,
            'stok' => 100,
        ]);
        produk::create([
            'namaProduk' => 'milo',
            'harga' => 2000,
            'stok' => 100,
        ]);
        produk::create([
            'namaProduk' => 'kamper',
            'harga' => 1000,
            'stok' => 100,
        ]);
    }
}
