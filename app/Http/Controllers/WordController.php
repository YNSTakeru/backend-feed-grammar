<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;

class WordController extends Controller
{
    public function sendWords($id)
    {
        $query = Word::search($id);
        $words = $query->select("id", "content")->get();

        return response()->json(
            [
                "status" => true,
                "words" => $words,
            ],
            200,
            [],
            JSON_UNESCAPED_UNICODE
        );
    }
}
