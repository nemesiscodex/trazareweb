<?php namespace Trazare;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {

	protected $fillable = array('name', 'img', 'rasgo_id');

}
