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
            $table->string('documentos');
            $table->enum('proprietario', ['Sim', 'Nao'])->default('Sim');
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
