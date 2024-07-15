<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'last_login_at' => $faker->dateTime,
        
    ];
});/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Membresium::class, static function (Faker\Generator $faker) {
    return [
        'nombreMembresia' => $faker->sentence,
        'tipoMembresia' => $faker->sentence,
        'valorMembresia' => $faker->randomFloat,
        'descripcionMembresia' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Descuento::class, static function (Faker\Generator $faker) {
    return [
        'nombreDescuento' => $faker->sentence,
        'fechaInicioDescuento' => $faker->date(),
        'fechaVencimientoDescuento' => $faker->date(),
        'valorDescuento' => $faker->randomFloat,
        'descripcion' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Cliente::class, static function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->sentence,
        'celular' => $faker->sentence,
        'email' => $faker->email,
        'fechaInicio' => $faker->date(),
        'fechaFin' => $faker->date(),
        'valorTotal' => $faker->randomFloat,
        'membresia_id' => $faker->sentence,
        'descuento_id' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
