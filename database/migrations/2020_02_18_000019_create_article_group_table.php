<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_group', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('amount');
            $table->bigInteger('group_id')->unsigned();
            $table->bigInteger('article_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('article_id')->references('id')->on('articles');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_group');
    }
}
