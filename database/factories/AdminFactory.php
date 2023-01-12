<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
      'name' => 'Admin',
      'email' => 'Admin@gmail.com',
      'alamat' => 'Yogyakarta',
      'password' => encrypt("admin123"),
    ];
});
