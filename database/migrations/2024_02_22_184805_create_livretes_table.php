<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivretesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livretes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('taxista_id')->constrained('taxistas');
            $table->string('matricula1');
            $table->string('modelo1');
            $table->string('marca1');
            $table->string('ndemotor1');
            $table->string('cor1');
            $table->string('medidaspneus');
            $table->string('pesobruto');
            $table->string('dentreixos');
            $table->string('servico');
            $table->string('cilindrada');
            $table->string('ndequadro1');
            $table->string('lotacao');
            $table->string('tara');
            $table->string('tipodecaixa');
            $table->string('combustivel');
            $table->string('ndecilindros');
            $table->date('dataregistro');
            $table->enum('responsavel', ['Sim', 'Nao'])->default('Sim');
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
        Schema::dropIfExists('livretes');
    }
}
