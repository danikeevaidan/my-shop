<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2);
            $table->integer('stock')->default(0);
            $table->timestamps();
        });
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('color');
            $table->string('size')->nullable();
            $table->decimal('price', 8, 2);
            $table->integer('stock')->default(0);
            $table->json('images')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });



    }

    public function down(): void
    {
           Schema::dropIfExists('products');
    }
};
