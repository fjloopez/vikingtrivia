<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $fillable = ['id', 'text', 'created_at', 'updated_at', 'category_id', 'user_id'];
    protected $dates = ['created_at', 'updated_at'];		//NO ESTAMOS SEGUROS
    //protected $guarded = ['id', 'created_at', 'updated_at'];


    public function answers()
    {
    	return $this->hasMany('App\Answer');
    }

    public function category()
    {
    	//parametros:
    	//1: nombre completamente calificado del modelo con el cual me relaciono - OBLIGATORIO
    	//2: nombre del foreing key id_genero genre_id
    	//3: nombre del local key
    	return $this->belongsTo('App\Category');
    }


    public function getId(){
        return $this->id;
    }


    public static function getQuestion($preguntasPrevias)
    {
//        dd(self::whereNotIn('id', $preguntasPrevias)->inRandomOrder()->first());
        return self::whereNotIn('id', $preguntasPrevias)->inRandomOrder()->first();
    }

}
