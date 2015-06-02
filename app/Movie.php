<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model {

	protected $fillable = ['nombre','descripcion'];
	public function reviews()
	{
		return $this->hasMany('App\Review');
	}
	public function ratings()
	{
		return $this->hasMany('App\Rating');
	}

}
