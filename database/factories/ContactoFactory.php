<?php

use Faker\Generator as Faker;

$factory->define(App\Contacto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'telefono' => $faker->PhoneNumber,
        'mail' => $faker->unique()->safeEmail,
        'direccion' => 'Pruebas'


    ];
});
