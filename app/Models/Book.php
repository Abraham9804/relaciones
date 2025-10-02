<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author'];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    //Relacion muchos a muchos polimorfica
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable')->withTimestamps();
    }
}
