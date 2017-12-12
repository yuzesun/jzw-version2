<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('branch_id')->unsigned();
            $table->integer('vendor_id')->unsigned();
            $table->integer('forwarder_id')->unsigned()->nullable();
            $table->string('order_number')->unique();
            $table->date('order_date');
            $table->date('etd');
            $table->date('eta');
            $table->string('vendor_payment');
            $table->string('shipping_status');
            $table->date('arrival_date')->nullable();
            $table->char('comments', 100);
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
        Schema::dropIfExists('vendors');
        Schema::dropIfExists('branches');
    }
}
