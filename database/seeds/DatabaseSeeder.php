<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Trazare\Rasgo;
use Trazare\Item;
use Trazare\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call('RasgoItemTableSeeder');
		$this->command->info('Rasgo and Item tables seeded!');
	}

}

class RasgoItemTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('rasgos')->delete();
		DB::table('items')->delete();
		DB::table('users')->delete();

		$rango1 = Rasgo::create([
			'name' => 'SOCIAL',
			'desc' => 'SOCIAL',
			'max_desc' => 'Disfrutas mucho de la compañía y el contacto con las personas en general, tanto para atender sus necesidades básicas, emocionales, la enseñanza o la sola observación de las mismas. Encuentras mucha satisfacción al emprender dichas actividades. por ello tu inclinación está rumbo a las profesiones dedicadas a las ciencias sociales y afines.',
			'avg_desc' => 'Te motiva e impulsa cualquier actividad relacionada con las personas o grupos en general, tu objetivo es el bienestar psico-físico de los mismos y el tuyo propio, por ello tu inclinación está rumbo a las profesiones dedicadas a las ciencias sociales y afines.',
			'min_desc' => 'Se visualiza una tendencia hacia una o varias actividades relacionadas a las personas, para el logro de su bienestar psico-físico, por ello tu inclinación está rumbo a las profesiones dedicadas a las ciencias sociales y/o afines. Si te enfocas lograras “interesarte” mas en este campo y “realizarte” si verdaderamente te interesa.'
			]);

		$rango2 = Rasgo::create([
			'name' => 'SALUD',
			'desc' => 'SALUD',
			'max' => 7,
			'max_desc' => 'Disfrutas mucho del cuidado del cuerpo, el contacto con la naturaleza y de la atención específica del ser humano y de su bien estar psico- físico. Tu personalidad se caracteriza por una gran motivación social y de servicio hacia los demás, cuidas todo lo que concierne a tu entorno ambiental (ecosistema), animal o humano, tienes una gran capacidad de empatía para ponerte en el lugar de los otros y percibir sus necesidades. Esta forma de ser se adecua a las actividades concernientes a la salud del ser humano y del animal, en forma científica  o natural, o para las relacionadas con  la naturaleza y el deporte.',
			'avg_desc' => 'Te motiva e impulsa cualquier actividad relacionada a la salud de las personas y del animal, para el logro de su bienestar por ello tu inclinación está rumbo a las profesiones dedicadas a la salud o bien para profesiones con relación a la naturaleza  y el deporte por aire, mar o tierra.',
			'min_desc' => 'actividades Relacionadas a la salud o el bienestar de las personas porque te interesa todo lo relacionado al cuerpo, la naturaleza , la salud y el ecosistema en general, por ello si te enfocas mejor podrás definir en qué área te sentirás más satisfecho porque en cualquiera de estas áreas se requiere un esfuerzo físico y mucha actitud de servicio a los demás.'
			]);

		$rango3 = Rasgo::create([
			'name' => 'TECNOLOGÍA',
			'desc' => 'TECNOLOGÍA',
			
			'max_desc' => 'Disfrutas mucho cuando puedes hacer uso de la tecnología en todas sus formas, como ser construir, armar, desarmar, desarrollar nuevas formas e investigar al respecto, por ello debes relacionarte con máquinas de todo tipo la mayor parte de tu tiempo hasta casi olvidarte del mundo exterior. Este tipo de actividad en la ingeniería, la arquitectura, la informática, la electricidad, electrónica y similares.',
			'avg_desc' => 'Te motiva e impulsa cualquier actividad relacionada al uso de las máquinas en sus diferentes formas, con ello pasas mucho tiempo relacionado con ellas sumergido en un objetivo hasta conseguirlo al punto de olvidarte del mundo exterior. Este tipo de actividad en la ingeniería, la arquitectura, la informática, la electricidad, electrónica y similares.',
			'min_desc' => 'Se observa una fuerte inclinación  hacia el uso de la tecnología, es decir máquinas de diverso tipo y en diversos escenarios, es decir desde la computadora, el teléfono, internet hasta maquinarias de gran porte, ingeniería, rascacielos o el campo, deseando lograr un mejoramiento en esos campos, involucra todo tipo de actividad en la ingeniería, la arquitectura, la informática, la electricidad, electrónica y similares.'
			]);

		$rango4 = Rasgo::create([
			'name' => 'ARTE',
			'desc' => 'ARTE',
			
			'max_desc' => 'Disfrutas mucho cuando puedes expresar y darle forma o sentido a las cosas que piensas o sientes, eligiendo una forma de expresarlo te hace sentir muy feliz, al ejercerlo es cuando la vida tiene un sentido para tí.',
			'avg_desc' => 'Te motiva e impulsa cualquier actividad relacionada al arte en cualquiera de sus formas o eligiendo la que mejor expresa tus sentimientos y pensamientos haciéndote sentir muy realizada/o.',
			'min_desc' => 'Se visualiza una tendencia hacia una o varias actividades relacionadas al arte en cualquiera de sus formas o eligiendo la que mejor expresa tus sentimientos y pensamientos. Si te enfocas lograras interesarte mas en este campo y realizarte si verdaderamente te interesa.'
			]);

		$rango5 = Rasgo::create([
			'name' => 'ECONOMÍA Y NEGOCIOS',
			'desc' => 'ECONOMÍA Y NEGOCIOS',
			
			'max_desc' => 'Disfrutas mucho en actividades comerciales, de liderazgo o simplemente en transacciones comerciales. Podemos decir te motiva sacarle el mayor provecho a tu tiempo y a tu esfuerzo en donde siempre encontrarás una recompensa por ello. Estas actividades se involucran con el mundo del management, los negocios, las ventas, la administración, la economía y similares. Eres una persona  muy práctica y realista en tu forma de encarar la vida.',
			'avg_desc' => 'Te motiva e impulsa cualquier actividad práctica y lucrativa relacionada al mundo de los negocios, las ventas la administración, la economía y similares. Tu forma de ser es muy práctica y realista, sos una persona astuta y en ocasiones manipuladora, por ello has tenido buenos resultados haciendo transacciones o negociaciones vinculadas a las actividades arriba señaladas.',
			'min_desc' => 'Quieres sacar el mayor provecho de todas tus actividades,  ya sea en lo laboral o personal, también te has dado cuenta que tienes habilidades sociales para liderar o encarar a las personas, eres persistente, astuto, negociador, líder y a veces manipulador, porque lo que quieres es lograr tus objetivos o deseos con la ayuda o mandando u organizando a los otros. No tienes muy definido tu campo de acción porque es muy variado pero te identificas con estos aspectos de tu personalidad.'
			]);

		Item::create([
			'name' => 'Enseñar a otros a leer y escribir',
			'img' => 'social/item1-1.jpg',
			'rasgo_id' => $rango1->id,
			]);
		Item::create([
			'name' => 'Defender y discutir representando a otras personas, para llegar a la verdad',
			'img' => 'social/item1-2.jpg',
			'rasgo_id' => $rango1->id,
			]);
		Item::create([
			'name' => 'Relatar sucesos de una comunidad escribiendo noticias',
			'img' => 'social/item1-3.jpg',
			'rasgo_id' => $rango1->id,
			]);
		Item::create([
			'name' => 'Asistir a las personas carenciadas en momentos difíciles como inundaciones, viviendas, vestimentas, comida, etc.',
			'img' => 'social/item1-4.jpg',
			'rasgo_id' => $rango1->id,
			]);
		Item::create([
			'name' => 'Organizar las actividades del grupo de amigos',
			'img' => 'social/item1-5.jpg',
			'rasgo_id' => $rango1->id,
			]);

		Item::create([
			'name' => 'Compartir con personas solidarias, sociables y entusiastas la mayor parte del tiempo',
			'img' => 'social/item1-6.jpg',
			'rasgo_id' => $rango1->id,
			]);		

		Item::create([
			'name' => 'Sanar heridas, cuidar enfermos ',
			'img' => 'salud/item2-1.jpg',
			'rasgo_id' => $rango2->id,
			]);
		Item::create([
			'name' => 'Cuidar de mi mascota y proteger todo ser vivo',
			'img' => 'salud/item2-2jpg',
			'rasgo_id' => $rango2->id,
			]);
		Item::create([
			'name' => 'Conocer  la conducta de las personas o grupos ',
			'img' => 'salud/item2-3.jpg',
			'rasgo_id' => $rango2->id,
			]);
		Item::create([
			'name' => 'Valorar el cuidado de la alimentación y cuidado de la salud',
			'img' => 'salud/item2-4.jpg',
			'rasgo_id' => $rango2->id,
			]);
		Item::create([
			'name' => 'Practicar regularmente una disciplina deportiva',
			'img' => 'salud/item2-5.jpg',
			'rasgo_id' => $rango2->id,
			]);
		Item::create([
			'name' => 'Realizar actividades tranquilas al aire libre en contacto con la naturaleza',
			'img' => 'salud/item2-6.jpg',
			'rasgo_id' => $rango2->id,
			]);
		Item::create([
			'name' => 'Realizar viajes o exploraciones riesgosas en diferentes regiones',
			'img' => 'salud/item2-7.jpg',
			'rasgo_id' => $rango2->id,
			]);
		
		Item::create([
			'name' => 'Reparar, armar o desarmar cosas',
			'img' => 'tecnologia/item3-1.jpg',
			'rasgo_id' => $rango3->id,
			]);
		Item::create([
			'name' => 'Construir edificios, casas, puentes',
			'img' => 'tecnologia/item3-2.jpg',
			'rasgo_id' => $rango3->id,
			]);
		Item::create([
			'name' => 'Cuidar un jardín, cultivar y cosechar.',
			'img' => 'tecnologia/item3-3.jpg',
			'rasgo_id' => $rango3->id,
			]);
		Item::create([
			'name' => 'Realizar actividades relacionadas al ciclo sustentable del planeta, reciclaje',
			'img' => 'tecnologia/item3-4.jpg',
			'rasgo_id' => $rango3->id,
			]);
		Item::create([
			'name' => 'Crear y diseñar productos de diverso tipo',
			'img' => 'tecnologia/item3-5.jpg',
			'rasgo_id' => $rango3->id,
			]);
		Item::create([
			'name' => 'Investigar nuevas formas de comunicación tecnológica',
			'img' => 'tecnologia/item-3-6.jpg',
			'rasgo_id' => $rango3->id,
			]);

		Item::create([
			'name' => 'Escribir poesía, novelas, cuentos, blogs, canciones.',
			'img' => 'arte/item4-1.jpg',
			'rasgo_id' => $rango4->id,
			]);
		Item::create([
			'name' => 'Ejecutar instrumentos',
			'img' => 'arte/item4-2.jpg',
			'rasgo_id' => $rango4->id,
			]);
		Item::create([
			'name' => 'Bailar, cantar, actuar',
			'img' => 'arte/item4-3.jpg',
			'rasgo_id' => $rango4->id,
			]);
		Item::create([
			'name' => 'Dibujar, pintar, fotografiar',
			'img' => 'arte/item4-4.jpg',
			'rasgo_id' => $rango4->id,
			]);
		Item::create([
			'name' => 'Desarrollar actividades manuales (modelado de objetos, esculturas, tejidos, origami) ',
			'img' => 'arte/item4-5.jpg',
			'rasgo_id' => $rango4->id,
			]);
		Item::create([
			'name' => 'Crear nuevas formas de expresar belleza y armonía',
			'img' => 'arte/item4-6.jpg',
			'rasgo_id' => $rango4->id,
			]);
		Item::create([
			'name' => 'Comprar y vender cosas para tener una ganancia',
			'img' => 'economia/item5-1.jpg',
			'rasgo_id' => $rango5->id,
			]);
		Item::create([
			'name' => 'Pensar en nuevas cosas que las personas necesiten consumir ',
			'img' => 'economia/item5-2.jpg',
			'rasgo_id' => $rango5->id,
			]);
		Item::create([
			'name' => 'Hacer cosas nuevas siempre, crear, inventar servicios',
			'img' => 'economia/item5-3.jpg',
			'rasgo_id' => $rango5->id,
			]);

		Item::create([
			'name' => 'Dirigir un grupo de personas para lograr un resultado',
			'img' => 'economia/item5-4.jpg',
			'rasgo_id' => $rango5->id,
			]);
		Item::create([
			'name' => 'Definir estrategias para satisfacer a Clientes',
			'img' => 'economia/item5-5.jpg',
			'rasgo_id' => $rango5->id,
			]);
		Item::create([
			'name' => 'Entender por qué y cómo funciona la economía del país y el mundo',
			'img' => 'economia/item5-6.jpg',
			'rasgo_id' => $rango5->id,
			]);




		


		
	}

}
