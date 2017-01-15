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

$factory->define(App\Company::class, function (Faker\Generator $faker) {
    $faker->addProvider(new Faker\Provider\pt_BR\Person($faker));

    return [
        'name' => $faker->unique()->company
    ];
});

$factory->define(App\Group::class, function (Faker\Generator $faker) {
    $faker->addProvider(new Faker\Provider\pt_BR\Address($faker));

    return [
        'name' => $faker->state
    ];
});

$factory->define(App\User::class, function (Faker\Generator $faker) {
    $faker->addProvider(new Faker\Provider\pt_BR\Person($faker));
    $faker->addProvider(new Faker\Provider\pt_BR\Internet($faker));

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $faker->password,
        'company_id' => $faker->numberBetween(1, 20)
    ];
});

$factory->define(App\UserGroup::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->unique()->numberBetween(1, 100),
        'group_id' => $faker->numberBetween(1, 20)
    ];
});
