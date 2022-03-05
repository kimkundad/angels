<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_contacts', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('sex')->nullable();
            $table->text('age')->nullable();
            $table->text('phone')->nullable();
            $table->text('line')->nullable();
            $table->text('career')->nullable();
            $table->integer('status')->default('0');
            $table->text('subject')->nullable();
            $table->text('subject2')->nullable();
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
        Schema::dropIfExists('add_contacts');
    }
}
