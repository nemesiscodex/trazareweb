<?php namespace Trazare\Http\Controllers;

use Trazare\Http\Requests;
use Trazare\Rasgo;
use Trazare\Item;
use Trazare\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Survey extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function list_rasgos()
	{
		return Rasgo::all()->toJson();
	}
	/**
	* Display a listing of the resource.
	*
	* @return Response
	*/
	public function list_items()
	{
		return Item::all()->toJson();
	}


}
