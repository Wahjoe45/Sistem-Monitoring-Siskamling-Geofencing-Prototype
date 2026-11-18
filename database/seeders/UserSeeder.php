<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Pengurus 1',
            'username' => 'pengurus1',
            'password' => Hash::make('pengurus123'),
            'no_telepon' => '085792080611',
            'role' => 'pengurus'
        ]);

        User::create([
            'nama' => 'Warga 1',
            'username' => 'warga1',
            'password' => Hash::make('warga123'),
            'no_telepon' => '085792081611',
            'role' => 'warga'
        ]);
    }
}
