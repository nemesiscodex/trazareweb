<?php namespace Trazare;

use Illuminate\Database\Eloquent\Model;

class Rasgo extends Model {

	//
	protected $fillable = array('name', 'desc',
	'max_desc', 'avg_desc', 'min_desc',
	'max', 'avg', 'min');

}
