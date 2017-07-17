<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Banner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('banner', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('pic');
            $table->string('url');
            $table->integer('is_show');
            $table->integer('creat_author');
            $table->integer('update_author');
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
        //
         Schema::dropIfExists('banner');
    }
}
