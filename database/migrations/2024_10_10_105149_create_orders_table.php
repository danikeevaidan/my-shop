<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Уникальный идентификатор заказа
            $table->foreignId('client_id')->constrained()->onDelete('cascade'); // Ссылка на клиента, оформившего заказ
            $table->foreignId('product_id')->nullable()->constrained()->onDelete('cascade'); // Ссылка на продукт (если применимо)
            $table->foreignId('service_id')->nullable()->constrained()->onDelete('cascade'); // Ссылка на услугу (если применимо)
            $table->integer('quantity')->default(1); // Количество товаров или услуг в заказе
            $table->decimal('total_price', 8, 2); // Общая сумма заказа
            $table->string('status')->default('pending'); // Статус заказа (pending, completed, canceled и т.д.)
            $table->timestamps(); // Временные метки
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
