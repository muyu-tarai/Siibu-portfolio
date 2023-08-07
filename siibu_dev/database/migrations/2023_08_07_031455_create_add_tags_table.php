<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_tags', function (Blueprint $table) {
            $table->integer('article_id')->unsigned()->comment('記事ID');
            $table->foreign('article_id')->references('id')->on('articles')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->integer('tag_id')->unsigned()->comment('タグID');
            $table->foreign('tag_id')->references('id')->on('tags')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addTags');
    }
};
