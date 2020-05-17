<?php

use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
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
            $cliente = new App\Cliente();
            $cliente->nome = $faker->firstName;
            $cliente->sobrenome = $faker->lastName;
            $cliente->email = $faker->unique()->safeEmail;
            $cliente->idade = rand(5, 100);
            $cliente->endereco = $faker->streetAddress;
            $cliente->bairro = $faker->streetName;
            $cliente->cep = $faker->postcode;
            $cliente->cidade = $faker->city;
            $cliente->uf = $faker->stateAbbr;
            $cliente->cpf = $faker->cpf;
            $cliente->rg = $faker->rg;
            $cliente->save();
        }
    }
}
