<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
	public function questions()
    {
    	return $this->belongsTo('App\Question');
    }


    public function getAnswers ($id){

        return $this::where('question_id', '=', $id);
    }

}
