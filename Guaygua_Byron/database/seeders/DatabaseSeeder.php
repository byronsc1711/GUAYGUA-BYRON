<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Usuario::factory(10)->create();

        \App\Models\Configuracion::factory()->create(['idioma'=>'Español']); 
        \App\Models\Configuracion::factory()->create(['pais'=>'Ecuador']); 
        \App\Models\Configuracion::factory()->create(['estado'=>'Pichincha']); 
        \App\Models\Configuracion::factory()->create(['idioma'=>'Ingles']); 
        \App\Models\Configuracion::factory()->create(['pais'=>'USA']); 
        \App\Models\Configuracion::factory()->create(['estado'=>'California']); 

        \App\Models\Rol::factory(5)->create(['descripcion'=>'Programador']); 
        \App\Models\Rol::factory(5)->create(['descripcion'=>'Tester']); 
        
    }
}
