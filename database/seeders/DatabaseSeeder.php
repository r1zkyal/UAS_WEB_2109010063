<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pasien;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Pasien::create([
            'name' => 'Test User',
            'phone_number' => '123321',
        ]);
        Pasien::create([
            'name' => 'Test User 2',
            'phone_number' => '12332',
        ]);
        Pasien::create([
            'name' => 'Test User',
            'phone_number' => '123321',
        ]);
        Pasien::create([
            'name' => 'Test User',
            'phone_number' => '123211',
        ]);
        Pasien::create([
            'name' => 'User',
            'phone_number' => '22323211',
        ]);
        Pasien::create([
            'name' => 'Test User',
            'phone_number' => '1232111',
        ]);
    }
}
