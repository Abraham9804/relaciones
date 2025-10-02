<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    protected $fillable = ['body', 'comentable_id', 'comentable_type'];

    public function comentable()
    {
        return $this->morphTo();
    }
}
