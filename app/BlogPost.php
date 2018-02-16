<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{

	protected $dates = ['published_at'];
    
	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function category()
	{
		return $this->belongsTo('App\BlogCategory');
	}

	public function getSummary()
	{
		return substr(strip_tags($this->body), 100) . '...';
	}
}
