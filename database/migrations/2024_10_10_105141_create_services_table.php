<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id(); // Уникальный идентификатор услуги
            $table->string('name'); // Название услуги
            $table->text('description')->nullable(); // Описание услуги
            $table->decimal('price', 8, 2); // Цена услуги
            $table->timestamps(); // Временные метки
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
