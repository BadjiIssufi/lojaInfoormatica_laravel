<?php

use Illuminate\Database\Seeder;

class ContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pt_BR');

        for ($i = 0; $i < 20; $i++) {
            $contato = new App\Contato();
            $contato->nome = $faker->name;
            $contato->email = $faker->unique()->safeEmail;
            $contato->save();
        }
    }
}
