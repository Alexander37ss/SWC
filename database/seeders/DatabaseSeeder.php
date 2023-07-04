<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AlumnoSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\FechaSeeder;
use Database\Seeders\PreJustificanteSeeder;
use Database\Seeders\tramite_detalle;
use Database\Seeders\tramite;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
        public function run(){
            $this->call(AlumnoSeeder::class);
            $this->call(UserSeeder::class);
            $this->call(TipoTramiteSeeder::class);
            $this->call(PreJustificanteSeeder::class);

            $this->call(TramiteDetalleSeeder::class);
            $this->call(TramiteSeeder::class);
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        }
}
