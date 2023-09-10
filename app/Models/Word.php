<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;

    public function video()
    {
        return $this->belongsTo(Word::class);
    }

    public function scopeSearch($query, $videoId)
    {
        if ($videoId === null) {
            return;
        }
        $query->where("video_id", "=", $videoId);

        return $query;
    }
}
