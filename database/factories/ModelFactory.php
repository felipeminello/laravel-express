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

$factory->define(App\User::class, function (Faker\Generator $faker) {
	return [
		'name'           => $faker->name,
		'email'          => $faker->email,
		'password'       => bcrypt(123),
		'remember_token' => str_random(10),
	];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
	$users = App\User::all()->lists('id')->toArray();

	return [
		'user_id'  => $faker->randomElement($users),
		'title'    => $faker->sentence,
		'subtitle' => $faker->sentence,
		'content'  => $faker->paragraph,
	];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {
	$posts = App\Post::all()->lists('id')->toArray();

	return [
		'post_id' => $faker->randomElement($posts),
		'name'    => $faker->name,
		'email'   => $faker->email,
		'comment' => $faker->paragraph,
	];
});

$factory->define(App\Tag::class, function (Faker\Generator $faker) {
	return [
			'name' => $faker->word
	];
});

$factory->define(App\Tag::class, function (Faker\Generator $faker) {
	return [
			'name' => $faker->word
	];
});
