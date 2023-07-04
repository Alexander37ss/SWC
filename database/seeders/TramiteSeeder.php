<?php

namespace Database\Seeders;

use App\Models\tramite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TramiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tramite::create(['tramite_id'=>1,'tipo_id'=> 3,'orientadora_id'=> 4,'alumno_id'=> 1, 'autorizado' => 1]);   
        tramite::create(['tramite_id'=>2,'tipo_id'=> 3,'orientadora_id'=> 4,'alumno_id'=> 2, 'autorizado' => 0]);   
        tramite::create(['tramite_id'=>3,'tipo_id'=> 3,'orientadora_id'=> 4,'alumno_id'=> 3, 'autorizado' => 1]);   
        tramite::create(['tramite_id'=>4,'tipo_id'=> 3,'orientadora_id'=> 4,'alumno_id'=> 4, 'autorizado' => 0]);   
        tramite::create(['tramite_id'=>5,'tipo_id'=> 3,'orientadora_id'=> 4,'alumno_id'=> 1, 'autorizado' => 1]);   
        # 5
        tramite::create(['tramite_id'=>6,'tipo_id'=> 3,'orientadora_id'=> 5,'alumno_id'=> 6, 'autorizado' => 1]);   
        tramite::create(['tramite_id'=>7,'tipo_id'=> 3,'orientadora_id'=> 5,'alumno_id'=> 7, 'autorizado' => 0]);   
        tramite::create(['tramite_id'=>8,'tipo_id'=> 3,'orientadora_id'=> 5,'alumno_id'=> 1, 'autorizado' => 1]);   
        tramite::create(['tramite_id'=>9,'tipo_id'=> 3,'orientadora_id'=> 5,'alumno_id'=> 9, 'autorizado' => 1]);   
        tramite::create(['tramite_id'=>10,'tipo_id'=> 3,'orientadora_id'=> 5,'alumno_id'=> 10, 'autorizado' => 1]);   
        # 10 
        tramite::create(['tramite_id'=>11,'tipo_id'=> 3,'orientadora_id'=> 5,'alumno_id'=> 1, 'autorizado' => 1]);   
        tramite::create(['tramite_id'=>12,'tipo_id'=> 3,'orientadora_id'=> 4,'alumno_id'=> 1, 'autorizado' => 1]);   
        tramite::create(['tramite_id'=>13,'tipo_id'=> 3,'orientadora_id'=> 4,'alumno_id'=> 1, 'autorizado' => 1]);   
        tramite::create(['tramite_id'=>14,'tipo_id'=> 3,'orientadora_id'=> 4,'alumno_id'=> 1, 'autorizado' => 1]);   
        tramite::create(['tramite_id'=>15,'tipo_id'=> 3,'orientadora_id'=> 4,'alumno_id'=> 1, 'autorizado' => 1]);   
        # 15
        tramite::create(['tramite_id'=>16,'tipo_id'=> 3,'orientadora_id'=> 4,'alumno_id'=> 16, 'autorizado' => 0]);   
        tramite::create(['tramite_id'=>17,'tipo_id'=> 3,'orientadora_id'=> 4,'alumno_id'=> 17, 'autorizado' => 0]);  
        tramite::create(['tramite_id'=>18,'tipo_id'=> 3,'orientadora_id'=> 4,'alumno_id'=> 15, 'autorizado' => 1]);   
        tramite::create(['tramite_id'=>19,'tipo_id'=> 3,'orientadora_id'=> 4,'alumno_id'=> 16, 'autorizado' => 0]);   
        tramite::create(['tramite_id'=>20,'tipo_id'=> 3,'orientadora_id'=> 4,'alumno_id'=> 17, 'autorizado' => 0]); 
        # 20
        tramite::create(['tramite_id'=>18,'tipo_id'=> 3,'orientadora_id'=> 4,'alumno_id'=> 2, 'autorizado' => 1]);   
        tramite::create(['tramite_id'=>19,'tipo_id'=> 3,'orientadora_id'=> 4,'alumno_id'=> 2, 'autorizado' => 1]);   
        tramite::create(['tramite_id'=>20,'tipo_id'=> 3,'orientadora_id'=> 4,'alumno_id'=> 2, 'autorizado' => 1]);
    }
}
