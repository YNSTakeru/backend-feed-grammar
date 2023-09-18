<?php

namespace App\Http\Controllers;

use App\Http\Resources\SectionCollection;
use App\Http\Resources\SectionResource;
use App\Models\Question;
use App\Models\Section;

class SectionController extends Controller
{
    public function index()
    {
        return (new SectionCollection(Section::all()))->toJson(JSON_UNESCAPED_UNICODE);
    }

    public function show(Section $section)
    {
        return (new SectionResource($section))->toJson(JSON_UNESCAPED_UNICODE);
    }

    public function sendQuestions($id)
    {
        $query = Question::search($id);
        $questions = $query->select("id", "content", "theme")->get();

        return response()->json(
            [
                "status" => true,
                "questions" => $questions,
            ],
            200,
            [],
            JSON_UNESCAPED_UNICODE
        );
    }

    public function sendNextQuestion($sectionId, $questionId)
    {
        $question = Question::find($questionId)->next($sectionId);

        return response()->json(
            [
                "status" => true,
                "question" => $question,
            ],
            200,
            [],
            JSON_UNESCAPED_UNICODE
        );
    }

    public function sendPreviousQuestion($sectionId, $questionId)
    {
        $question = Question::find($questionId)->previous($sectionId);

        return response()->json(
            [
                "status" => true,
                "question" => $question,
            ],
            200,
            [],
            JSON_UNESCAPED_UNICODE
        );
    }
}
