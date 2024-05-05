<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxistas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('ndebi');
            $table->enum('genero', ['masculino', 'femenino'/*,'outro'*/]);
            $table->date('data');
            $table->string('numerotelefone');
            $table->string('documentos');
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
        Schema::dropIfExists('taxistas');
    }
}
