<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('song_name');
            $table->bigInteger('category_id')->unsigned();
            $table->string('lyric')->nullable();
            $table->string('song_image')->nullable();
            $table->string('path');
            $table->string('album')->nullable();
            $table->string('author')->nullable();
            $table->bigInteger('view_count')->nullable()->default(0);
            $table->integer('like')->nullable()->default(0);
            $table->integer('unlike')->nullable()->default(0);
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
        Schema::dropIfExists('songs');
    }
}
