<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        "section_id",
        "content",
        "theme"
    ];

    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }

    public function urls(): HasMany
    {
        return $this->hasMany(Url::class);
    }
}
