<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Уникальный идентификатор продукта
            $table->string('name'); // Название продукта
            $table->text('description')->nullable(); // Описание продукта
            $table->decimal('price', 8, 2); // Цена продукта
            $table->integer('stock')->default(0); // Количество на складе
            $table->timestamps(); // Временные метки (created_at и updated_at)
        });
    }


};
