<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Tarea', function(Blueprint $table){
            $table->id();
            $table->string('Titulo');
            $table->text('Contenido');
            $table->string('Estado');
            $table->timestamps();
            $table->UnsignedBigInteger('fk_ID_User');
            $table->foreign('fk_ID_User')->references('id')->on('User');  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('Tarea');
    }
};
