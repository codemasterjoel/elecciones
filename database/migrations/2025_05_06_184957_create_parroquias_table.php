<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('parroquias', function (Blueprint $table) {
            $table->id();
            $table->integer('parroquia_id');
            $table->string('nombre');
            $table->string('abreviatura');
            $table->foreignId('circuito_id')->nullable()->references('id')->on('circuitos');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('parroquias');
    }
};
