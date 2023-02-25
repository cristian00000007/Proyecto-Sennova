<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Program_FechaInicio',100);
            $table->string('Program_FechaFinal',100);
            $table->string('Program_Dia',100);
            $table->string('Program_HoraInicio',100);
            $table->string('Program_HoraFinal',100);
            $table->string('Program_Trimestre',100);
            $table->string('Program_Franja',100);
            $table->bigInteger('ambientesIdAmbientes')->unsigned();
            $table->bigInteger('FichaId')->unsigned();
            $table->bigInteger('InstructorId')->unsigned();
            $table->foreign('ambientesIdAmbientes')->references('id')->on('ambientes');
            $table->foreign('FichaId')->references('id')->on('fichas');
            $table->foreign('InstructorId')->references('id')->on('instructors');
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
        Schema::dropIfExists('programacions');
    }
}
