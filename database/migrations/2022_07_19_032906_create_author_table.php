<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author', function (Blueprint $table) {
            $table->id();
            $table->string('name',128);
            $table->string('email',255)->unique();
            $table->string('password',255);
            $table->date('date_birth')->nullable();
            $table->integer('Level')->default(1);
            $table->text('bio')->nullable();
            $table->string('image',255)->nullable();
            $table->timestamp('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('author');
    }
}
