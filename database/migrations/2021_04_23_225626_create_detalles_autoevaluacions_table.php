<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesAutoevaluacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_autoevaluacions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('autoevaluacion_id')->constrained('autoevaluaciones');
            $table->foreignId('sintoma_id')->constrained('sintomas');
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
        Schema::dropIfExists('detalles_autoevaluacions');
    }
}
