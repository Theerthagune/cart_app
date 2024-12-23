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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->date('order_date');
            $table->double('total_amount', 10, 0);
            $table->integer('number_of_product');
            $table->string('delivery_status', 255);
            $table->unsignedBigInteger('payment_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('shipping_id');
            $table->foreign('user_id')->references('user_id')->on('user')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
