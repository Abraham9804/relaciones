<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id')
                                    ->withTimestamps()->withPivot('data');
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function coments()
    {
        return $this->morphMany(Coment::class, 'comentable');
    }
}
