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
        Schema::create('candidaturas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id'); 
            $table->longText('description');
            $table->unsignedBigInteger('solicitud_id');
            $table->unsignedBigInteger('curriculum_id');
            $table->Integer('puntuacion');

            $table->foreign('solicitud_id')
                ->references('id')->on('solicitudes')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            $table->foreign('curriculum_id')
                ->references('id')->on('curriculums')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidaturas');
    }
};
