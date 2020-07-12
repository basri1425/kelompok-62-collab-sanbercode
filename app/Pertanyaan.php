<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    public function tags(){
        return $this->belongsToMany('App\Tag');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->morphToMany('App\Jawaban','commentable');
    }
    
    protected $fillable =['isiPertanyaan','judulPertanyaan','slug','user_id'];
}
