<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //protected $fillable = ['title', 'text'];

    public function answers() {
        return $this->hasMany('App\Answer', 'question_id');
    }
    public function user() {
        return $this->belongsTo('App\user',  'user_id','id');
        dd($user);
    }
    public function scopeNotEmpty($query) {
        return $query -> whereNotNull('text');
    }
}
