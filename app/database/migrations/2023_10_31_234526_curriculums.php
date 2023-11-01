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
        Schema::create('curriculums', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id'); 
            $table->unsignedInteger('user_rut');
            $table->rememberToken();
            $table->foreign('user_rut')
                ->references('rut')->on('users')
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
        Schema::dropIfExists('curriculums');
    }
};
