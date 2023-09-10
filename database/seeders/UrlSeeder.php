<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class UrlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("urls")->insert([
            [
                "url" => "K-g_sxCbhvs",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "url" => "7bB_fVDlvhc",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "url" => "e0AUHoX7i9A",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "url" => "pxYqvczO6DI",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "url" => "L3QkaS249Bc",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "url" => "w4RLfVxTGH4",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "url" => "iU14UFtLmpw",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "url" => "Mv555OoCtps",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "url" => "HdzrGJ_lxko",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "url" => "snkr-1C2e7U",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "url" => "NEO7p_Sy_v8",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "url" => "hEMjiQhLWBw",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "url" => "9_mLtv1iNF4",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "url" => "jxKq096efAg",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "url" => "CTlkXhkP6bo",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "url" => "Zx8uYIfUvh4",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "url" => "Qf5E2viHDCE",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                "url" => "PwLcwlco27c",
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
        ]);
    }
}
