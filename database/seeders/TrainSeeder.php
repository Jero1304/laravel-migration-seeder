<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\treno;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) { 
            $new_train = new treno();
            $new_train->company = $faker->word().' company';
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->date('Y_m_d');
            $new_train->arrival_time = $faker->date('Y_m_d');
            $new_train->train_code = $faker->bothify('????-######');
            $new_train->wagons_number = rand(1, 99);
            $new_train->on_time = $faker->boolean();
            $new_train->cancelled = $faker->boolean();
            $new_train->save();
        }
    }
}
