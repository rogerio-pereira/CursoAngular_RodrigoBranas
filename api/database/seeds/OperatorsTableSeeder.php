<?php

use Illuminate\Database\Seeder;

class OperatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Operator::class)->create([
            'nome' => 'Oi',
            'codigo' => 14,
            'categoria' => 'Celular',
            'preco' => 2,
        ]);

        factory(App\Operator::class)->create([
            'nome' => 'Vivo',
            'codigo' => 15,
            'categoria' => 'Celular',
            'preco' => 1,
        ]);

        factory(App\Operator::class)->create([
            'nome' => 'Tim',
            'codigo' => 41,
            'categoria' => 'Celular',
            'preco' => 3,
        ]);

        factory(App\Operator::class)->create([
            'nome' => 'GVT',
            'codigo' => 25,
            'categoria' => 'Fixo',
            'preco' => 1,
        ]);

        factory(App\Operator::class)->create([
            'nome' => 'Embratel',
            'codigo' => 21,
            'categoria' => 'Fixo',
            'preco' => 2,
        ]);
    }
}
