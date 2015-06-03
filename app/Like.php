<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model {

	protected $fillable = ['user_id','review_id'];
	public function review()
	{
		return $this->belongsTo('App\Review');
	}
	public function user()
	{
		return $this->belongsTo('App\User');
	}

}
