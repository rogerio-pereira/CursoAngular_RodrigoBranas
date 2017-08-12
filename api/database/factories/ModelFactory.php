<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Contact::class, function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('pt_br');
    $faker->addProvider(new Faker\Provider\pt_BR\Person($faker));
    $faker->addProvider(new Faker\Provider\pt_BR\PhoneNumber($faker));

    return [
        'nome' => $faker->firstName,
        'telefone' => $faker->phone,
        'data' => $faker->dateTime,
        'cor' => $faker->hexcolor,
        'operator_id' => $faker->numberBetween(1,5),
    ];
});

$factory->define(App\Operator::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->word,
        'codigo' => $faker->numberBetween(10,99),
        'categoria' => $faker->word,
        'preco' => $faker->numberBetween(1,3),
    ];
});