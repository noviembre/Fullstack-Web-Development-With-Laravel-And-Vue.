<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        
         #---- el ".": elimina el punto q se le da a la frase creada.
         'title'   => rtrim($faker->sentence(rand(5, 10)), "."),
         #---- el 3, significa el 3 saltos de linea
         'body'    => $faker->paragraphs(rand(3, 7), true),
         'views'   => rand(0, 10),
         'answers' => rand(0, 10),
         'votes'   => rand(-3, 10)

    ];
});
