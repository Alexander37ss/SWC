<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_justificantes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('alumno_id');
            
            $table->string('motivo');
            $table->string('motivo_otro')->nullable();
            
            $table->date('del'); # desde que dia
            $table->date('al');  # hasta que dia
            
            $table->date('fecha_solicitada');
            $table->integer('estatus_solicitud'); # 0 sin responder - 1 aceptada - 2 negada
            $table->string('grupo');
            
            $table->foreign('alumno_id')->references('id')->on('alumnos');
            # $table->img('INE_img');
            # $table->img('motivo_img');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pre_justificantes');
    }
};
