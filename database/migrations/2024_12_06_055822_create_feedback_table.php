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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id('feedback_id');
            $table->string('comments', 255)->nullable();
            $table->integer('ratings')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('order_item_id');
            $table->unsignedBigInteger('product_id');
            $table->foreign('user_id')->references('user_id')->on('user')->onDelete('cascade');
            $table->foreign('order_item_id')->references('order_item_id')->on('order_items')->onDelete('cascade');
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
