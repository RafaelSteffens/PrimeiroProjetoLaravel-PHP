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
        Schema::create('noticias', function (Blueprint $table) {
            $table->id(); 
            $table->timestamps();
            $table->string('name'); // Coluna 'name' TEXT
            $table->integer('number'); // Coluna 'number' INTEGER
            $table->text('obs'); // Coluna 'obs' TEXT
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
