<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_buyouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_id')->nullable();
            $table->foreignId('checkout_id')->nullable();
            $table->foreignId('product_id');
            $table->string('total');
            $table->string('qty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_buyouts');
    }
};
