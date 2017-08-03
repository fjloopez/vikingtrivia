<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    protected $fillable = ['id', 'text', 'created_at', 'updated_at', 'category_id', 'user_id'];
    protected $dates = ['created_at', 'updated_at'];		//NO ESTAMOS SEGUROS
    //protected $guarded = ['id', 'created_at', 'updated_at'];


    public function questions()
    {
    	return $this->hasMany('App\Answers');
    }

    public function category()
    {
    	//parametros:
    	//1: nombre completamente calificado del modelo con el cual me relaciono - OBLIGATORIO
    	//2: nombre del foreing key id_genero genre_id
    	//3: nombre del local key
    	return $this->belongsTo('App\Category');
    }

}
