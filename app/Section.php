<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{

	protected $fillable = ['key'];

    public static function getValue($key)
    {
    	$section = Section::where('key', $key)->firstOrFail();
    	if(!$section){
    		return false;
    	}
    	$value = strip_tags($section->value);
    	return $value;
    }
}
