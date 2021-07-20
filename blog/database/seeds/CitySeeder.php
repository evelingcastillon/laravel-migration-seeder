<?php
use Faker\Generator as Faker;
use App\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 9; $i++) { 
            $city = new City();
            $city->image_city = $faker->imageUrl(640, 480, 'cities', true);
            $city->title = $faker->state();
            $city->description = $faker->paragraph();
            $city->phone = $faker->phoneNumber();
            $city->vote = $faker->numberBetween(5, 9);
            $city->price = $faker->numberBetween(600,900);
            $city->email = $faker->email(5, 9);
            $city->save();
        }
    }
}
