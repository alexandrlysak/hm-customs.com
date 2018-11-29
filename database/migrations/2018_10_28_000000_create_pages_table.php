<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url', 255)->nullable();
            $table->string('meta_title', 255)->nullable();
            $table->string('meta_keywords', 255)->nullable();
            $table->string('meta_description', 255)->nullable();
            $table->text('content')->nullable();
            $table->string('image', 255)->nullable();
            $table->string('layout', 255)->default('page');
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
        Schema::dropIfExists('pages');
    }
}
