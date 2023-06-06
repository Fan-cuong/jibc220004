<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use App\Models\Tweet;

class TweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('tweets')->insert([
        //     'content' => String::random(10),
        //     'title' => String::random(10),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // $this->call([TweetSeeder::class]);
        Tweet::factory()->count(10)->create();
    }
}
