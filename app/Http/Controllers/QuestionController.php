<?php

namespace App\Http\Controllers;

use App\Http\Resources\QuestionCollection;
use App\Http\Resources\QuestionResource;
use App\Models\Question;
use App\Models\Section;

class QuestionController extends Controller
{

    public function index(Section $section)
    {
        $questions = $section->questions()->paginate();
        return new QuestionCollection($questions);
    }

    public function show(Question $question)
    {
        $previousQuestion = Question::where([['section_id', '=', $question->section_id], ["id", "<", $question->id]])->orderBy('id', 'desc')->first();
        $nextQuestion = Question::where([['section_id', '=', $question->section_id], ["id", ">", $question->id]])->first();

        return (new QuestionResource(["previousQuestion" => $previousQuestion, "nextQuestion" => $nextQuestion]))->toJson(JSON_UNESCAPED_UNICODE);
    }
}
