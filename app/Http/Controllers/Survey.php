<?php namespace Trazare\Http\Controllers;

use Illuminate\Http\Request;
use Trazare\Http\Requests;
use Trazare\Rasgo;
use Trazare\Item;
use Trazare\User;
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
	/**
	* Submit results
	*
	* @return Response
	*/
	public function submit(Request $request){
		$name = $request->input('name');
		$email = $request->input('email');
		$rasgo_id = $request->input('rasgo_id');
		$result = $request->input('result');

		$user = new User;
		$user->name = $name;
		$user->email = $email;
		$user->rasgo_id = $rasgo_id;
		$user->result = $result;
		$user->save();
	}
}
