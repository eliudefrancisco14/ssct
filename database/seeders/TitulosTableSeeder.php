<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TitulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Popula a tabela com 10 registros falsos
        for ($i = 0; $i < 10; $i++) {
            DB::table('titulos')->insert([
                'livrete_id' => $faker->randomNumber(2),
                'taxista_id' => $faker->randomNumber(2),
                'ndequadro' => $faker->bothify('??##??##'),
                'nometitular' => $faker->name,
                'ndebi1' => $faker->numerify('###########'),
                'modelo' => $faker->word,
                'ndemotor' => $faker->bothify('##??#####??#?##?#'),
                'dataemissao' => $faker->dateTimeThisMonth(),
                'cor' => $faker->safeColorName,
                'matricula' => $faker->bothify('??######??'),
                'marca' => $faker->word,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
