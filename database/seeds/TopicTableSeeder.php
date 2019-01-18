<?php

use Illuminate\Database\Seeder;
use App\Topic;

class TopicTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $faker = Faker\Factory::create('id_ID');
    for ($i=0; $i < rand(1, 100); $i++) {
      Topic::create([
        'name' => $faker->text(20)
      ]);
    }
  }
}
