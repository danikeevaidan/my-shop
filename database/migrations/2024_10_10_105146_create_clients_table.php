<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

   public function up()
   {
       Schema::create('clients', function (Blueprint $table) {
           $table->id(); // Уникальный идентификатор клиента
           $table->string('name'); // Имя клиента
           $table->string('email')->unique(); // Email клиента (уникальный)
           $table->string('phone')->nullable(); // Телефон клиента (опционально)
           $table->timestamps(); // Временные метки
       });
   }


    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
