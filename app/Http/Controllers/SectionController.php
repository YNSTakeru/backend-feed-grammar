<?php

namespace App\Http\Controllers;

use App\Http\Resources\SectionCollection;
use App\Http\Resources\SectionResource;
use App\Models\Section;
use Spatie\QueryBuilder\QueryBuilder;

class SectionController extends Controller
{
    public function index()
    {
        $sections = QueryBuilder::for(Section::class)->allowedIncludes("questions")->paginate();
        return (new SectionCollection($sections));
    }

    public function show(Section $section)
    {
        return (new SectionResource($section))->load("questions")->toJson(JSON_UNESCAPED_UNICODE);
    }
}
