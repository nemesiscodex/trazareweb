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
			'max_desc' => 'max',
			'avg_desc' => 'avg',
			'min_desc' => 'min'
			]);

		$rango2 = Rasgo::create([
			'name' => 'SALUD',
			'desc' => 'SALUD',
			'max' => 7,
			'max_desc' => 'max',
			'avg_desc' => 'avg',
			'min_desc' => 'min'
			]);

		$rango3 = Rasgo::create([
			'name' => 'TECNOLOGÍA',
			'desc' => 'TECNOLOGÍA',
			
			'max_desc' => 'max',
			'avg_desc' => 'avg',
			'min_desc' => 'min'
			]);

		$rango4 = Rasgo::create([
			'name' => 'ARTE',
			'desc' => 'ARTE',
			
			'max_desc' => 'max',
			'avg_desc' => 'avg',
			'min_desc' => 'min'
			]);

		$rango5 = Rasgo::create([
			'name' => 'ECONOMÍA Y NEGOCIOS',
			'desc' => 'ECONOMÍA Y NEGOCIOS',
			
			'max_desc' => 'max',
			'avg_desc' => 'avg',
			'min_desc' => 'min'
			]);

		Item::create([
			'name' => 'Enseñar a otros a leer y escribir',
			'img' => 'item1-1.jpg',
			'rasgo_id' => $rango1->id,
			]);
		Item::create([
			'name' => 'Defender y discutir representando a otras personas, para llegar a la verdad',
			'img' => 'item1-2.jpg',
			'rasgo_id' => $rango1->id,
			]);
		Item::create([
			'name' => 'Relatar sucesos de una comunidad escribiendo noticias',
			'img' => 'item1-3.jpg',
			'rasgo_id' => $rango1->id,
			]);
		Item::create([
			'name' => 'Asistir a las personas carenciadas en momentos difíciles como inundaciones, viviendas, vestimentas, comida, etc.',
			'img' => 'item1-4.jpg',
			'rasgo_id' => $rango1->id,
			]);
		Item::create([
			'name' => 'Organizar las actividades del grupo de amigos',
			'img' => 'item1-5.jpg',
			'rasgo_id' => $rango1->id,
			]);

		Item::create([
			'name' => 'Compartir con personas solidarias, sociables y entusiastas la mayor parte del tiempo',
			'img' => 'item1-6.jpg',
			'rasgo_id' => $rango1->id,
			]);		

		Item::create([
			'name' => 'Sanar heridas, cuidar enfermos ',
			'img' => 'item2-1.jpg',
			'rasgo_id' => $rango2->id,
			]);
		Item::create([
			'name' => 'Cuidar de mi mascota y proteger todo ser vivo',
			'img' => 'item2-2jpg',
			'rasgo_id' => $rango2->id,
			]);
		Item::create([
			'name' => 'Conocer  la conducta de las personas o grupos ',
			'img' => 'item2-3.jpg',
			'rasgo_id' => $rango2->id,
			]);
		Item::create([
			'name' => 'Valorar el cuidado de la alimentación y cuidado de la salud',
			'img' => 'item2-4.jpg',
			'rasgo_id' => $rango2->id,
			]);
		Item::create([
			'name' => 'Practicar regularmente una disciplina deportiva',
			'img' => 'item2-5.jpg',
			'rasgo_id' => $rango2->id,
			]);
		Item::create([
			'name' => 'Realizar actividades tranquilas al aire libre en contacto con la naturaleza',
			'img' => 'item2-6.jpg',
			'rasgo_id' => $rango2->id,
			]);
		Item::create([
			'name' => 'Realizar viajes o exploraciones riesgosas en diferentes regiones',
			'img' => 'item2-7.jpg',
			'rasgo_id' => $rango2->id,
			]);
		
		Item::create([
			'name' => 'Reparar, armar o desarmar cosas',
			'img' => 'item3-1.jpg',
			'rasgo_id' => $rango3->id,
			]);
		Item::create([
			'name' => 'Construir edificios, casas, puentes',
			'img' => 'item3-2.jpg',
			'rasgo_id' => $rango3->id,
			]);
		Item::create([
			'name' => 'Cuidar un jardín, cultivar y cosechar.',
			'img' => 'item3-3.jpg',
			'rasgo_id' => $rango3->id,
			]);
		Item::create([
			'name' => 'Realizar actividades relacionadas al ciclo sustentable del planeta, reciclaje',
			'img' => 'item3-4.jpg',
			'rasgo_id' => $rango3->id,
			]);
		Item::create([
			'name' => 'Crear y diseñar productos de diverso tipo',
			'img' => 'item3-5.jpg',
			'rasgo_id' => $rango3->id,
			]);
		Item::create([
			'name' => 'Investigar nuevas formas de comunicación tecnológica',
			'img' => 'item-3-6.jpg',
			'rasgo_id' => $rango3->id,
			]);

		Item::create([
			'name' => 'Escribir poesía, novelas, cuentos, blogs, canciones.',
			'img' => 'item4-1.jpg',
			'rasgo_id' => $rango4->id,
			]);
		Item::create([
			'name' => 'Ejecutar instrumentos',
			'img' => 'item4-2.jpg',
			'rasgo_id' => $rango4->id,
			]);
		Item::create([
			'name' => 'Bailar, cantar, actuar',
			'img' => 'item4-3.jpg',
			'rasgo_id' => $rango4->id,
			]);
		Item::create([
			'name' => 'Dibujar, pintar, fotografiar',
			'img' => 'item4-4.jpg',
			'rasgo_id' => $rango4->id,
			]);
		Item::create([
			'name' => 'Desarrollar actividades manuales (modelado de objetos, esculturas, tejidos, origami) ',
			'img' => 'item4-5.jpg',
			'rasgo_id' => $rango4->id,
			]);
		Item::create([
			'name' => 'Crear nuevas formas de expresar belleza y armonía',
			'img' => 'item4-6.jpg',
			'rasgo_id' => $rango4->id,
			]);
		Item::create([
			'name' => 'Comprar y vender cosas para tener una ganancia',
			'img' => 'item5-1.jpg',
			'rasgo_id' => $rango5->id,
			]);
		Item::create([
			'name' => 'Pensar en nuevas cosas que las personas necesiten consumir ',
			'img' => 'item5-2.jpg',
			'rasgo_id' => $rango5->id,
			]);
		Item::create([
			'name' => 'Hacer cosas nuevas siempre, crear, inventar servicios',
			'img' => 'item5-3.jpg',
			'rasgo_id' => $rango5->id,
			]);

		Item::create([
			'name' => 'Dirigir un grupo de personas para lograr un resultado',
			'img' => 'item5-4.jpg',
			'rasgo_id' => $rango5->id,
			]);
		Item::create([
			'name' => 'Definir estrategias para satisfacer a Clientes',
			'img' => 'item5-5.jpg',
			'rasgo_id' => $rango5->id,
			]);
		Item::create([
			'name' => 'Entender por qué y cómo funciona la economía del país y el mundo',
			'img' => 'item5-6.jpg',
			'rasgo_id' => $rango5->id,
			]);




		


		
	}

}
