<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    //Relacion muchos a muchos
    /*public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id')
                                    ->withTimestamps()->withPivot('data');
    }*/

    //Relacion uno a uno polimorfica
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    //Relacion uno a muchos polimorfica
    public function coments()
    {
        return $this->morphMany(Coment::class, 'comentable');
    }

    //Relacion muchos a muchos polimorfica
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable')->withTimestamps();
    }
}
