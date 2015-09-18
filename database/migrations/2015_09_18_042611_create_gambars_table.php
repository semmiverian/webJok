<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGambarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gambars', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
        Schema::create('about_gambar', function(Blueprint $table)
        {
            $table->integer('about_id')->unsigned();
            $table->integer('gambar_id')->unsigned();
            $table->foreign('about_id')
                  ->references('id')
                  ->on('abouts')
                  ->onDelete('cascade');
            $table->foreign('gambar_id')
                  ->references('id')
                  ->on('gambars')
                  ->onDelete('cascade');
            $table->primary(['about_id','gambar_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('about_gambar');
        Schema::drop('abouts');
        Schema::drop('gambars');
    }
}
