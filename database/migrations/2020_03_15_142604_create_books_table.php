<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('authors');
            $table->text('title');
            $table->bigInteger('price');
            $table->longText('description');
            $table->text('image')->nullable();
            $table->string('edition')->nullable();
            $table->string('number_of_pages')->nullable();
            $table->string('country');
            $table->string('language');
            $table->bigInteger('amount_in_stock');
            $table->bigInteger('reviews')->default(0);
            $table->bigInteger('number_of_reviews')->default(0);
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
        Schema::dropIfExists('books');
    }
}
