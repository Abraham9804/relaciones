<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    /** @use HasFactory<\Database\Factories\LessonFactory> */
    use HasFactory;

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id', 'id');
    }

    public function comments()
    {
        return $this->morphMany(Coment::class, 'comentable');
    }
}
