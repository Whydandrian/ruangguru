<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('orderId', 10)->unique();
            $table->foreign('productId')->references('productId')->on('products');
            $table->foreign('customerId')->references('customerId')->on('customers');
            $table->string('orderDegree', 25);
            $table->string('orderCourse', 100);
            $table->string('orderStatus', 15);
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
}
