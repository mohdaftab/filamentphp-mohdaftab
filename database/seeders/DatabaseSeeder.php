<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $count = 50;

        foreach (range(1, $count) as $i) {
            DB::table('regions')->insert([
                'title' => Str::random(5),
            ]);

            DB::table('revenue_ranges')->insert([
                'title' => Str::random(5),
            ]);

            DB::table('industries')->insert([
                'title' => Str::random(5),
            ]);
        }
    }
}
