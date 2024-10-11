<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('type')->nullable();
            $table->string('color')->nullable();
            $table->json('sizes')->nullable(); // Хранение размеров в JSON формате
            $table->decimal('price', 10, 2);
            $table->boolean('availability')->default(true);
            $table->json('images')->nullable(); // Хранение ссылок на изображения в JSON формате
            $table->timestamps();
        });
    }



    public function down()
    {
        Schema::dropIfExists('product_revisions');
        Schema::dropIfExists('product_translations');
        Schema::dropIfExists('product_slugs');
        Schema::dropIfExists('products');
    }
};
