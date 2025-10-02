<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    //Relacion muchos a muchos
   /*public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_tag', 'tag_id', 'post_id')
                                    ->withTimestamps()->withPivot('data');
    }*/

    //Relacion muchos a muchos polimorfica
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable')->withTimestamps();
    }

    public function books()
    {
        return $this->morphedByMany(Book::class, 'taggable')->withTimestamps();
    }
}
