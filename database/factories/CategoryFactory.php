<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'nama_kategori' => $faker->unique()->name,
        'slug' => Str::slug($faker->unique()->name, '-'),
    ];
});
