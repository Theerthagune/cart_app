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
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id')->nullable();
            $table->string('product_name', 255);
            $table->string('description', 255)->nullable();
            $table->decimal('price', 19, 0);
            $table->integer('quantity');
            $table->string('category', 255)->nullable();
            $table->string('image')->nullable(); // Store the image file path
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
