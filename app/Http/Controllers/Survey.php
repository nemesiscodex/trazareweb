<?php namespace Trazare\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Mail\Mailer;
use Trazare\Http\Requests;
use Trazare\Rasgo;
use Trazare\Item;
use Trazare\User;
use Trazare\Http\Controllers\Controller;

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
		$name = $request->input('username');
		$email = $request->input('email');
		$results = $request->input('results');

		$user = User::where('email', $email)->first();
		if(is_null($user)){
			$user = new User;
			$user->email = $email;
		}
		$user->result = json_encode($results);
		$user->name = $name;
		$user->save();
		$result_array = [];
		foreach($results as $result){
			$rasgo = Rasgo::find($result['id']);
			$rasgo->count = $rasgo->count;
			array_push($result_array, $rasgo);
		}
		$this->send_mail($name, $email, $result_array);

		return new Response(null, 202);
	}

	private function send_mail($name, $email, $results){
		$mailer = app()['mailer'];
		$mailer->send('mail',
			array(
				'name' => $name,
				'results' => $results,
				'logo' => array('width' => '160px', 'height' => '75px'),
				'reminder' => 'Recibiste este correo porque realizaste el test de ' . asset('/'),
				'facebook' => 'https://www.facebook.com/pages/Trazare/916580758351999'
			), function($message) use ($email, $name){
    			$message->to($email, $name)->subject('Tus Resultados!');
		});
	}
}
