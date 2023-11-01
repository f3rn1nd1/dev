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
        Schema::create('educaciones', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('id'); 
            $table->unsignedBigInteger('curriculum_id');
            $table->string('Universidad',30);
            $table->string('Titulo',30);
            $table->date('f_inicio');
            $table->date('f_fin');
            
            $table->foreign('curriculum_id')
            ->references('id')->on('curriculums')
            ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('educaciones');
    }
};
