<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Artikel;
use App\Models\Santri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@ponpesbdg.id',
            'password' => Hash::make('123456789')
        ]);
        Santri::create([
            'total' => 0,
            'tipe' => 'santrimi'
        ]);
        Santri::create([
            'total' => 0,
            'tipe' => 'santrimts'
        ]);
        Santri::create([
            'total' => 0,
            'tipe' => 'santrima'
        ]);
        Santri::create([
            'total' => 0,
            'tipe' => 'prestasi'
        ]);
    }
}
