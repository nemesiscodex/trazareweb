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
			'name' => 'item1',
			'desc' => 'item1',
			'max_desc' => 'max',
			'avg_desc' => 'avg',
			'min_desc' => 'min'
			]);

		$rango2 = Rasgo::create([
			'name' => 'item2',
			'desc' => 'item2',
			'max_desc' => 'max',
			'avg_desc' => 'avg',
			'min_desc' => 'min'
			]);

		$rango3 = Rasgo::create([
			'name' => 'item3',
			'desc' => 'item3',
			'max' => 7,
			'max_desc' => 'max',
			'avg_desc' => 'avg',
			'min_desc' => 'min'
			]);

		Item::create([
			'name' => 'item1',
			'img' => 'item1.jpg',
			'rasgo_id' => $rango1->id,
			]);

		Item::create([
			'name' => 'item2',
			'img' => 'item2.jpg',
			'rasgo_id' => $rango2->id,
			]);

		Item::create([
			'name' => 'item3',
			'img' => 'item3.jpg',
			'rasgo_id' => $rango3->id,
			]);

		Item::create([
			'name' => 'item4',
			'img' => 'item1.jpg',
			'rasgo_id' => $rango1->id,
			]);

		Item::create([
			'name' => 'item5',
			'img' => 'item2.jpg',
			'rasgo_id' => $rango2->id,
			]);

		Item::create([
			'name' => 'item6',
			'img' => 'item3.jpg',
			'rasgo_id' => $rango3->id,
			]);

		Item::create([
			'name' => 'item7',
			'img' => 'item1.jpg',
			'rasgo_id' => $rango1->id,
			]);

		Item::create([
			'name' => 'item8',
			'img' => 'item2.jpg',
			'rasgo_id' => $rango2->id,
			]);

		Item::create([
			'name' => 'item9',
			'img' => 'item3.jpg',
			'rasgo_id' => $rango3->id,
			]);

		Item::create([
			'name' => 'item10',
			'img' => 'item1.jpg',
			'rasgo_id' => $rango1->id,
			]);

		Item::create([
			'name' => 'item11',
			'img' => 'item2.jpg',
			'rasgo_id' => $rango2->id,
			]);

		Item::create([
			'name' => 'item12',
			'img' => 'item3.jpg',
			'rasgo_id' => $rango3->id,
			]);

		Item::create([
			'name' => 'item13',
			'img' => 'item1.jpg',
			'rasgo_id' => $rango1->id,
			]);

		Item::create([
			'name' => 'item14',
			'img' => 'item2.jpg',
			'rasgo_id' => $rango2->id,
			]);

		Item::create([
			'name' => 'item15',
			'img' => 'item3.jpg',
			'rasgo_id' => $rango3->id,
			]);

		Item::create([
			'name' => 'item16',
			'img' => 'item1.jpg',
			'rasgo_id' => $rango1->id,
			]);

		Item::create([
			'name' => 'item17',
			'img' => 'item2.jpg',
			'rasgo_id' => $rango2->id,
			]);

		Item::create([
			'name' => 'item18',
			'img' => 'item3.jpg',
			'rasgo_id' => $rango3->id,
			]);

		Item::create([
			'name' => 'item19',
			'img' => 'item1.jpg',
			'rasgo_id' => $rango1->id,
			]);

		Item::create([
			'name' => 'item20',
			'img' => 'item2.jpg',
			'rasgo_id' => $rango2->id,
			]);

		Item::create([
			'name' => 'item21',
			'img' => 'item3.jpg',
			'rasgo_id' => $rango3->id,
			]);

		Item::create([
			'name' => 'item22',
			'img' => 'item1.jpg',
			'rasgo_id' => $rango1->id,
			]);

		Item::create([
			'name' => 'item23',
			'img' => 'item2.jpg',
			'rasgo_id' => $rango2->id,
			]);

		Item::create([
			'name' => 'item24',
			'img' => 'item3.jpg',
			'rasgo_id' => $rango3->id,
			]);

		Item::create([
			'name' => 'item25',
			'img' => 'item1.jpg',
			'rasgo_id' => $rango1->id,
			]);

		Item::create([
			'name' => 'item26',
			'img' => 'item2.jpg',
			'rasgo_id' => $rango2->id,
			]);

		Item::create([
			'name' => 'item27',
			'img' => 'item3.jpg',
			'rasgo_id' => $rango3->id,
			]);

		Item::create([
			'name' => 'item28',
			'img' => 'item1.jpg',
			'rasgo_id' => $rango1->id,
			]);

		Item::create([
			'name' => 'item29',
			'img' => 'item2.jpg',
			'rasgo_id' => $rango2->id,
			]);

		Item::create([
			'name' => 'item30',
			'img' => 'item3.jpg',
			'rasgo_id' => $rango3->id,
			]);

		Item::create([
			'name' => 'item31',
			'img' => 'item3.jpg',
			'rasgo_id' => $rango3->id,
			]);

	}

}
