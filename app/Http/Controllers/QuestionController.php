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
        $previousId = Question::where([['section_id', '=', $question->section_id], ["id", "<", $question->id]])->max("id");
        $nextId = Question::where([['section_id', '=', $question->section_id], ["id", ">", $question->id]])->min("id");

        return (new QuestionResource(["previousId" => $previousId, "nextId" => $nextId]))->toJson(JSON_UNESCAPED_UNICODE);
    }
}
