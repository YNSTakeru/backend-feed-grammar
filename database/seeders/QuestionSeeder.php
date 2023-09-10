<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("questions")->insert([
            [
                "section_id" => 1,
                "content" => "問い1",
                "theme" => "went",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 1,
                "content" => "test",
                "theme" => "went",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 2,
                "content" => "test2",
                "theme" => "went",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
        ]);
    }
}
