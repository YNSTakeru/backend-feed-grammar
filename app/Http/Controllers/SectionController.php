<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Question;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::all();

        return response()->json(
            [
                "status" => true,
                "sections" => $sections,
            ],
            200,
            [],
            JSON_UNESCAPED_UNICODE
        );
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
