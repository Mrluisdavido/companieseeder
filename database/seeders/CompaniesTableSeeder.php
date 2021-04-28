<?php

namespace Database\Seeders;
use App\Models\Companies;
use Faker\Factory;
use Faker\Factory as faker;
use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0;$i<=20;$i++){
            Companies::created([
                'name' => $faker ->name,
                'nit' => $faker ->numerify(123456-6),
                'address' =>$faker->address,
                'logo' =>$faker->image('C:\Users\LUIS\Pictures\imagenes\Wallpapers 2_FranxSoft')

            ]);
        }
    }
}
