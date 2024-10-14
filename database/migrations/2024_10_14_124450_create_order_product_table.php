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
        Schema::create('order_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade'); // Ссылка на таблицу заказов
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // Ссылка на таблицу продуктов
            $table->integer('quantity')->default(1); // Количество продуктов в заказе
            $table->timestamps();
        });
    }


        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_product');
    }
};
