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
            $table->integer('category_id')->nullable();
            $table->integer('cuisine_id')->nullable();
            $table->string('cuisine_txt')->nullable();
            $table->string('category_txt')->nullable();
            $table->boolean('isPublished')->default(0);
            $table->string('title');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->string('serves')->nullable();
            $table->string('preprationTime')->nullable();
            $table->string('cookingTime')->nullable();
            $table->string('cookingTemprature')->nullable();
            $table->string('featuredImage')->nullable();
            $table->longText('tags')->nullable();
            $table->longText('features')->nullable();
            $table->longText('dirtyIng')->nullable()->comment('will be removed once design changed');
            $table->longText('dirtyIns')->nullable()->comment('will be removed once design changed');
            $table->integer('views')->default(1);
            $table->string('website')->nullable();
            $table->string('source')->nullable();
            $table->softDeletes();
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
