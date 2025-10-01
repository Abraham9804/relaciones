<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Image extends Model
{
    use HasFactory;
    
    protected $fillable = ['imageable_id', 'imageable_type','url'];

    public function imageable()
    {
        return $this->morphTo();
    }
}
