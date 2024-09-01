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
        Schema::create('Libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 255);
            $table->string('autor', 100);
            $table->string('año_publicacion', 4);
            $table->string('genero', 50);
            $table->decimal('precio', 8, 2);
            $table->text('descripcion');
            $table->string('editorial', 100);
            $table->string('idioma', 30);
            $table->integer('estado');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists("libros");
    }
};
