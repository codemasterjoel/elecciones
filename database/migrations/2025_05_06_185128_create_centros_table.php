<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Integer;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('centros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('codigo');
            $table->foreignId('parroquia_id')->nullable()->references('id')->on('parroquias');
            $table->foreignId('eje_id')->nullable()->references('id')->on('ejes');
            $table->foreignId('circuito_id')->nullable()->references('id')->on('circuitos');
            $table->foreignId('comuna_id')->nullable()->references('id')->on('comunas');
            $table->integer('electores');
            $table->integer('meta');
            $table->integer('tipo');
            $table->integer('testigos')->nullable();
            $table->integer('par_ocho')->nullable();
            $table->integer('par_diez')->nullable();
            $table->boolean('aperturo')->nullable();
            $table->boolean('observacion')->nullable();
            
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('centros');
    }
};
