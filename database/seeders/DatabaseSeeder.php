<?php

namespace Database\Seeders;

use Faker\Core\Number;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $faker = \Faker\Factory::create('es_ES');
        for($i=0;$i<10;$i++){
            DB::table('users')->insert([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => $faker->password(), // password
                'fechaNac' => $faker->dateTime($max = 'now'),
                'telefono' => $faker-> phoneNumber(),
                'dni' => $faker->dni(),
                'remember_token' => Str::random(10),
            ]);
            /*
            DB::table('ascensors')->insert([
                'direccion' => $faker->address(),
                'modelo'=>$faker->lastName(),
                'capacidad'=>$faker->numberBetween(1, 10),
                'peso' =>$faker->numberBetween(100, 500),
                'paradas'=>$faker->numberBetween(1, 20),
                'recorrido'=>$faker->numberBetween(3, 39)
            ]);
            */
        }
    }
}
