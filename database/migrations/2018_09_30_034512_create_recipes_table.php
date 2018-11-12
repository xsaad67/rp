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
            $table->string('category')->nullable();
            $table->string('cuisine')->nullable();
            $table->boolean('published')->default(1);
            $table->string('title');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->string('serves')->nullable();
            $table->string('difficulty')->nullable();
            $table->string('preprationTime')->nullable();
            $table->string('cookingTime')->nullable();
            $table->string('cookingTemprature')->nullable();
            $table->string('featuredImage')->nullable();
            $table->longText('ingridents')->nullable();
            $table->longText('instructions')->nullable();
            $table->longText('features')->nullable();
            $table->text('apiLink')->nullable();
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
