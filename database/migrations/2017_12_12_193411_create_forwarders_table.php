<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForwardersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forwarders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name')->unique();
            $table->string('individual_name');
            $table->string('location');
            $table->string('email')->unique()->nullable();
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('branches');
        Schema::dropIfExists('organizations');
        Schema::dropIfExists('vendors');
        Schema::dropIfExists('forwarders');
    }
}
