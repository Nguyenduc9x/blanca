<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('users_id')->unsigned()->index();
            $table->string('name',128);
            $table->string('content',255);
            $table->datetime('datetime');
            $table->dateTime('created');
            $table->dateTime('update');
            $table->integer('comment_count');
            $table->bigInteger('category_id')->unsigned()->index();
            $table->string('image',255);
            $table->integer('is_active');
            $table->dateTime('deleted');

            
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
           
            
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}
