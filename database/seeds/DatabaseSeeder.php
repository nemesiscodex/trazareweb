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
