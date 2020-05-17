<?php

use Illuminate\Database\Seeder;

class VendedorSeeder extends Seeder
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
            $vendedor = new App\Vendedor();
            $vendedor->nome = $faker->firstName;
            $vendedor->sobrenome = $faker->lastName;
            $vendedor->email = $faker->unique()->safeEmail;
            $vendedor->idade = rand(5, 100);
            $vendedor->endereco = $faker->streetAddress;
            $vendedor->bairro = $faker->streetName;
            $vendedor->cep = $faker->postcode;
            $vendedor->cidade = $faker->city;
            $vendedor->uf = $faker->stateAbbr;
            $vendedor->cpf = $faker->cpf;
            $vendedor->rg = $faker->rg;
            $vendedor->save();
        }    
    }
}
