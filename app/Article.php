<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Article extends Model implements SluggableInterface
{
    //
	protected $table = "articles" ;

	protected $fillable = ['title','content','user_id','category_id','path'] ;


	public function user()
	{
		return $this->belongsTo('App\User') ;
	}

	public function category()
	{
		return $this->belongsTo('App\Category') ;
	}



}
