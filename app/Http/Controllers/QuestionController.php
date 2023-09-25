<?php

namespace App\Http\Controllers;

use App\Http\Resources\QuestionResource;
use App\Models\Question;
use Spatie\QueryBuilder\QueryBuilder;

class QuestionController extends Controller
{

    public function index()
    {
        $questions = QueryBuilder::for(Question::class)->allowedFilters("section_id")->paginate()->toJson(JSON_UNESCAPED_UNICODE);
        return $questions;
    }

    public function show(Question $question)
    {
        $previousId = Question::where([['section_id', '=', $question->section_id], ["id", "<", $question->id]])->max("id");
        $nextId = Question::where([['section_id', '=', $question->section_id], ["id", ">", $question->id]])->min("id");

        return (new QuestionResource(["previousId" => $previousId, "nextId" => $nextId]))->toJson(JSON_UNESCAPED_UNICODE);
    }
}
