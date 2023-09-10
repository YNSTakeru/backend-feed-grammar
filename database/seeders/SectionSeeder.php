<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("sections")->insert([
            [
                "title" => "自動詞と他動詞",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "title" => "test",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
        ]);
    }
}
