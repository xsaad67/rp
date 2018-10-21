<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->integer('cuisine_id');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->string('features')->nullable();
            $table->string('serves')->nullable();
            $table->string('difficulty')->nullable();
            $table->string('preprationTime');
            $table->string('cookingTime');
            $table->string('cookingTemprature')->nullable();
            $table->string('featuredImage')->nullable();
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
        Schema::dropIfExists('recipes');
    }
}
