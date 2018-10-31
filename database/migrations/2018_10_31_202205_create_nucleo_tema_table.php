<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNucleoTemaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nucleo_tema', function (Blueprint $table) {
            $table->unsignedInteger('nucleo_id');
            $table->foreign('nucleo_id')
                  ->references('id')
                  ->on('nucleos')
                  ->onDelete('cascade');

            $table->unsignedInteger('tema_id');
            $table->foreign('tema_id')
                  ->references('id')
                  ->on('temas')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('nucleo_tema');
    }
}
