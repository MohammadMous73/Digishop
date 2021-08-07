<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title',255)->unique();
            $table->string('processor model',255);
            $table->string('ram memory',255);
            $table->string('internal memory capacity',255);
            $table->string('gpu model',255);
            $table->string('graphic memory',255);
            $table->string('screen size',255);
            $table->string('screen accuracy',255);
            $table->string('optical drive',255);
            $table->string('operating system',255);
            $table->integer('price');
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
        Schema::dropIfExists('posts');
    }
}
