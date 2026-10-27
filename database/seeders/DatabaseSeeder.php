<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Berita;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@example.com',
        //     'password' => Hash::make('password'),
        // ]);

        // DB::table('beritas')->insert([
        //     'judul' => 'Rafi Berlari Cepat Mimpi',
        //     'slug' => 'Rafi-Berlari-Cepat-Mimpi',
        //     'penulis' => 'Rafi Baik',
        //     'content' => 'Rafi dan Vido berlar lari',
        // ]);
        Berita::factory()->count(5)->create();
    }
}
