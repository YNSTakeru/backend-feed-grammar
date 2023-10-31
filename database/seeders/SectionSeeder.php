<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("sections")->insert([
            [
                "title" => "バラエティ",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "title" => "自動詞と他動詞",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
        ]);
    }
}
