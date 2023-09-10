<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Video;

class QuestionController extends Controller
{
    public function sendVideos($questionId)
    {
        $query = Video::search($questionId);
        $videos = $query
            ->select("id", "url", "answer", "start_time", "end_time")
            ->get();

        return response()->json(
            [
                "status" => true,
                "videos" => $videos,
            ],
            200,
            [],
            JSON_UNESCAPED_UNICODE
        );
    }

    public function sendNextVideo($questionId, $videoId)
    {
        $video = Video::find($videoId)->next($questionId);

        return response()->json(
            [
                "status" => true,
                "video" => $video,
            ],
            200,
            [],
            JSON_UNESCAPED_UNICODE
        );
    }

    public function sendPreviousVideo($questionId, $videoId)
    {
        $video = Video::find($videoId)->previous($questionId);

        return response()->json(
            [
                "status" => true,
                "video" => $video,
            ],
            200,
            [],
            JSON_UNESCAPED_UNICODE
        );
    }
}
