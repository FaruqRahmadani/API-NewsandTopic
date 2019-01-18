<?php

use Illuminate\Database\Seeder;
use App\Topic;
use App\News;

class NewsTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $faker = Faker\Factory::create('id_ID');
    $topicId = $faker->randomElements(Topic::pluck('id'), rand(1,5));
    for ($i=0; $i < rand(1, 100); $i++) {
      $news = new News;
      $news->title = $faker->sentence(5);
      $news->content = $faker->realText(500);
      $news->save();
      $news->Topic()->sync($topicId);
    }
  }
}
