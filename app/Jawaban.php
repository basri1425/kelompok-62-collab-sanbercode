<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    public function commentable(){
        return $this->morphTo();
    };
}
