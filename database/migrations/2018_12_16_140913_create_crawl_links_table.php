<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrawlLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crawl_links', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('isPublished')->default(0);
            $table->string('link');
            $table->string('website'); 
            $table->integer('category_id')->nullable();
            $table->text('category_txt')->nullable();
            $table->integer('cuisine_id')->nullable();
            $table->text('cuisine_txt')->nullable();
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
        Schema::dropIfExists('crawl_links');
    }
}
