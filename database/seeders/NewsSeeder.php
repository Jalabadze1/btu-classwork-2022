<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 6; $i++) {
            DB::table('news')->insert([
                'uuid' => Str::uuid(),
                'record_date' => now(),
                'updated_date' => now(),
                'title' => "Article $i",
                'description' => "Description for Article $i",
                'content' => "Content for Article $i",
            ]);
        }
    }
}
