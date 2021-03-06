<?php

use \HaloFour\Gamertag as Gamertag;

class GamertagMongoSeeder extends Seeder {

	public function run()
	{
		DB::collection('h4_gamertags')->delete();

		Gamertag::create(
			[
				'Gamertag' => 'iBotPeaches v5',
				'SeoGamertag' => 'ibotpeaches_v5',
				'KDRatio' => 1.67,
				'KADRatio'  => 2.26,
			]
		);

	}
}