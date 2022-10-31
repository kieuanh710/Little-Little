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
        Schema::create('orders', function (Blueprint $table) {
            $table->id("id");
            $table->integer("quantity");
            $table->string("name");
            $table->string("phone");
            $table->string("email");
            $table->string("date");
            $table->string('cardNumber')->nullable();;
            $table->string('cardName')->nullable();;
            $table->string('expiryMonth')->nullable();;
            $table->string('expiryYear')->nullable();;
            $table->integer('cvv')->nullable();;
            $table->integer('totalPrice')->nullable();;
            $table->unsignedBigInteger("idTypeTicket");
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
        Schema::dropIfExists('orders');
    }
};
