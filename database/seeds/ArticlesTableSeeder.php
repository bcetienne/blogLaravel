<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        Schema::enableForeignKeyConstraints();

        for ($i = 0;  $i < 20; $i++){
            DB::table('articles')->insert([
                'title' => $faker->colorName,
                'content' => $faker->realText(10),
                'published_date' => $faker->dateTime('now'),
                'status' => $faker->numberBetween(0, 4),
                'user_id' => $faker->numberBetween(0, 50),
                'category_id' => $faker->numberBetween(0, 10),
            ]);
        }
    }
}
