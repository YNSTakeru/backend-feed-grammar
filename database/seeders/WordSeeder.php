<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("words")->insert([
            [
                "video_id" => 1,
                "content" => "We",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "video_id" => 1,
                "content" => "went",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "video_id" => 1,
                "content" => "around",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "video_id" => 1,
                "content" => "the",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "video_id" => 1,
                "content" => "bend",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "video_id" => 2,
                "content" => "I",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "video_id" => 2,
                "content" => "went",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "video_id" => 2,
                "content" => "to",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "video_id" => 2,
                "content" => "51",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "video_id" => 2,
                "content" => "countries",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
        ]);
    }
}
