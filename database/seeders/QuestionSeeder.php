<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                "theme" => "we",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 1,
                "content" => "問い2",
                "theme" => "went",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 1,
                "content" => "問い3",
                "theme" => "visited",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 1,
                "content" => "問い4",
                "theme" => "visited to",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 1,
                "content" => "問い5",
                "theme" => "the",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 1,
                "content" => "問い6",
                "theme" => "museum",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 1,
                "content" => "問い7",
                "theme" => "go",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 1,
                "content" => "問い8",
                "theme" => "I",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 1,
                "content" => "問い9",
                "theme" => "I",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 1,
                "content" => "問い9",
                "theme" => "looked",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 1,
                "content" => "問い10",
                "theme" => "at",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 1,
                "content" => "問い11",
                "theme" => "John",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 1,
                "content" => "問い12",
                "theme" => "listened",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 1,
                "content" => "問い13",
                "theme" => "theme",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 1,
                "content" => "問い14",
                "theme" => "park",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 1,
                "content" => "問い15",
                "theme" => "bank",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 1,
                "content" => "問い16",
                "theme" => "gym",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 1,
                "content" => "問い17",
                "theme" => "station",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 1,
                "content" => "問い18",
                "theme" => "zoo",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 1,
                "content" => "問い19",
                "theme" => "discussed",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 1,
                "content" => "問い20",
                "theme" => "matter",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 1,
                "content" => "問い21",
                "theme" => "problem",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 1,
                "content" => "問い22",
                "theme" => "schedule",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 1,
                "content" => "問い23",
                "theme" => "plan",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 1,
                "content" => "問い24",
                "theme" => "talked",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "section_id" => 2,
                "content" => "問い1",
                "theme" => "went",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
        ]);
    }
}
