<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('video_id');
            $table->string('video_file');
            $table->string('video_name');
            $table->string('video_url');
            $table->integer('price');
            $table->string('thumbnail');//サムネイル
            $table->string('description');//動画説明
            $table->string('supplement');//動画補足
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
