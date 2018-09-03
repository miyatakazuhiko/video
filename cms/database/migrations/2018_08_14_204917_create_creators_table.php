<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreatorsTable extends Migration
{
    public function up()
    {
        Schema::create('creators', function (Blueprint $table) {
            $table->increments('creator_id');
            $table->string('user_id');
            $table->string('creator_name');
            $table->string('birthday');
            $table->string('gender');
            $table->string('twitter');
            $table->string('instagram');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('creators');
    }
}
