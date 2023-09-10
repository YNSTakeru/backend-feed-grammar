<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Video;

class Url extends Model
{
    use HasFactory;

    public function question()
    {
        return $this->belongsTo(Url::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function scopeSearch($query, $questionId)
    {
        if ($questionId === null) {
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
            ->first();
    }

    public function next($questionId)
    {
        return $this->where([
            ["question_id", "=", $questionId],
            ["id", ">", $this->id],
        ])
            ->orderBy("id", "asc")
            ->first();
    }
}
