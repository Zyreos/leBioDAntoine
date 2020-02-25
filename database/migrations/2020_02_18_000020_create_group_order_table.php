<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('amount');
            $table->bigInteger('group_id')->unsigned();
            $table->bigInteger('order_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('order_id')->references('id')->on('orders');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_order');
    }
}
