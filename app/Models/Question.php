<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function urls()
    {
        return $this->hasMany(Url::class);
    }

    public function scopeSearch($query, $sectionId)
    {
        if ($sectionId === null) {
            return;
        }
        $query->where("section_id", "=", $sectionId);

        return $query;
    }

    public function previous($sectionId)
    {
        return $this->where([
            ["section_id", "=", $sectionId],
            ["id", "<", $this->id],
        ])
            ->orderBy("id", "desc")
            ->select("id", "content", "theme")
            ->first();
    }

    public function next($sectionId)
    {
        return $this->where([
            ["section_id", "=", $sectionId],
            ["id", ">", $this->id],
        ])
            ->orderBy("id", "asc")
            ->select("id", "content", "theme")
            ->first();
    }
}
