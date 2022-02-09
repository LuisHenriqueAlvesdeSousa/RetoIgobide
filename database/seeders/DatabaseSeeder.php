<?php

namespace Database\Seeders;
use Auth;
use Faker\Core\Number;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use \App\Models\User;
use \App\Models\Manual;
use \App\Models\Equipo;
use \App\Models\Tecnico;
use \App\Models\Operador;
use \App\Models\Ascensor;
use Illuminate\Support\Facades\App;

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
        $manuales = User::pluck('id')->toArray();
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

            DB::table('manuals')->insert([
                'ruta'=>$faker->url(),
            ]);
            

            DB::table('ascensors')->insert([
                'direccion' => $faker->address(),
                'modelo'=>$faker->lastName(),
                'capacidad'=>$faker->numberBetween(1, 10),
                'peso' =>$faker->numberBetween(100, 500),
                'paradas'=>$faker->numberBetween(1, 20),
                'recorrido'=>$faker->numberBetween(3, 39),
                'manual_id'=>$faker->randomElement($manuales),
            ]);

            DB::table('equipos')->insert([
                'codPostal'=>$faker->postcode(),
                'localidad'=>$faker->city(),
            ]);
        }

        $users = User::pluck('id')->toArray();
        $equipos = Equipo::pluck('id')->toArray();
        $ascensores = Ascensor::pluck('id')->toArray();
        $tecnicos = Tecnico::pluck('codigo')->toArray();
        $operadores = Operador::pluck('codigo')->toArray();

        for ($i=0; $i < 6; $i++) { 
            DB::table('tecnicos')->insert([
                'user_id'=>$faker->randomElement($users),
                'equipo_id'=>$faker->randomElement($equipos),
            ]);

            DB::table('operadors')->insert([
                'user_id'=>$faker->randomElement($users),
            ]);
    
            DB::table('jeves')->insert([
                'user_id'=>$faker->randomElement($users),
                'equipo_id'=>$faker->randomElement($equipos),
            ]);
    
            DB::table('directors')->insert([
                'user_id'=>$faker->randomElement($users),
            ]);
    
            DB::table('incidencias')->insert([
               'cliente'=>$faker->name(),
                'fechaInicio'=>$faker->dateTime($max = 'now'),
               'fechaFin'=>$faker->dateTime(),
                'email'=>$faker->unique()->safeEmail(),
                'descripcion'=>$faker->realText(150, 2),
                'ascensor_id'=>$faker->randomElement($ascensores),
                'tecnico_id'=>$faker->randomElement($tecnicos),
                'operador_id'=>$faker->randomElement($operadores),
                'urgencia'=>$faker->randomElement(['no prioritario', 'prioritario', 'urgente']),
                'averia'=>$faker->randomElement(['electrica', 'mecanica', 'estetica']),
            ]);
        }    

    }
}