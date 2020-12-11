<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('head_images', function (Blueprint $table) {
            $table->id();
            $table->text('page1')->nullable();
            $table->text('page2')->nullable();
            $table->text('page3')->nullable();
            $table->text('page4')->nullable();
            $table->text('page5')->nullable();
            $table->text('page6')->nullable();
            $table->text('page7')->nullable();
            $table->text('page8')->nullable();
            $table->text('page9')->nullable();
            $table->text('page10')->nullable();
            $table->text('page11')->nullable();
            $table->text('page12')->nullable();
            $table->text('page13')->nullable();
            $table->text('page14')->nullable();
            $table->text('page15')->nullable();
            $table->text('page16')->nullable();
            $table->text('page17')->nullable();
            $table->text('page18')->nullable();
            $table->text('page19')->nullable();
            $table->text('page20')->nullable();
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
        Schema::dropIfExists('head_images');
    }
}
