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
        Schema::create('criaturas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->bigInteger('id_tipo')->unsigned();
            $table->foreign('id_tipo')->references('id')->on('tipos');
            $table->bigInteger('id_pais')->unsigned();
            $table->foreign('id_pais')->references('id')->on('pais');                               
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
        Schema::dropIfExists('criaturas');
    }
};
