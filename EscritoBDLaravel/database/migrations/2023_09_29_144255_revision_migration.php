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
        Schema::create('Revision', function(Blueprint $table){
            $table->id();
            $table->string('Detalle');
            $table->timestamps();
            $table->UnsignedBigInteger('fk_ID_Tarea');
            $table->foreign('fk_ID_Tarea')->references('id')->on('Tarea');  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('Revision');
    }
};
