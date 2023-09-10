<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;

class UrlController extends Controller
{
    public function words()
    {
        return $this->hasMany(Word::class);
    }

    public function url()
    {
        return $this->belongsTo(Url::class);
    }

    public function scopeSearch($query, $questionId)
    {
        if ($questionId == null) {
            return;
        }
        $query->where("question_id", "=", $questionId);
        return $query;
    }

    public function previous($questionId)
    {
        return $this->where([
            ["question_id", "=", $questionId],
            ["id", "<", $this->id],
        ])
            ->orderBy("id", "desc")
            ->select("id", "url", "start_time", "end_time")
            ->first();
    }

    public function next($questionId)
    {
        return $this->where([
            ["question_id", "=", $questionId],
            ["id", ">", $this->id],
        ])
            ->orderBy("id", "asc")
            ->select("id", "url", "start_time", "end_time")
            ->first();
    }
}
