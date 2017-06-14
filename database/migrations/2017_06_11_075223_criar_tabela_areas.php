<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaAreas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Area_Nome');
            $table->string('Area_Titular');
            $table->string('Area_Telefone');
            $table->string('Area_Email');
            $table->string('Area_Skype');
            $table->string('Area_Endereco');
            $table->string('Area_Logo');
            $table->string('Area_Alias', 50);
            $table->string('Area_Secretaria');
            $table->string('Area_Tipo');
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
        Schema::dropIfExists('areas');
    }
}
