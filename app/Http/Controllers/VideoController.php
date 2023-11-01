<?php

namespace App\Http\Controllers;

use App\Http\Resources\VideoResource;
use App\Models\Video;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;



class VideoController extends Controller
{
    public function index()
    {
        $videos = QueryBuilder::for(Video::class)->allowedFilters([AllowedFilter::exact('question_id')])->paginate()->toJson(JSON_UNESCAPED_UNICODE);
        return $videos;
    }
    public function show(Video $video)
    {
        return (new VideoResource($video))->toJson(JSON_UNESCAPED_UNICODE);
    }
}
