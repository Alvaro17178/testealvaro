<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->increments ('id');
        
            $table->string('Codigo do produto');
            $table->string('Nome do produto');
            $table->string('Categoria');
            $table->string('Preço Unitario');
            $table->string('Descrição');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('formularios');
    }
};
