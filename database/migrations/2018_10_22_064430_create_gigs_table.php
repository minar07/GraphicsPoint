<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gigs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title');
            $table->integer('category_id');
            $table->string('description');
            $table->integer('basic_price');          
            $table->integer('premium_price');
            $table->integer('unlimited_price');
            $table->string('image_name');
            $table->string('image_name_1')->nullable();
            $table->string('image_name_2')->nullable();
            $table->string('image_name_3')->nullable();
            $table->string('image_name_4')->nullable();
            $table->string('image_name_5')->nullable();
            $table->string('image_name_6')->nullable();
            $table->string('image_name_7')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gigs');
    }
}
