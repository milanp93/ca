<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Recepies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recepies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('servings_time');
            $table->integer('cooking_time');
            $table->integer('prep_time');
            $table->integer('total_time');
            $table->text('ingredients');
            $table->text('methed');
            $table->text('image');
            $table->integer('display');
            $table->integer('users_id');
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
        Schema::drop('recepies');
    }
}
