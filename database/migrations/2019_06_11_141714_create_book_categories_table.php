<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sub_level_id');
            $table->foreign('sub_level_id')
                ->references('id')
                ->on('sub_levels')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('name');
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
        Schema::table('book_categories', function (Blueprint $table) {
            $table->dropForeign(['sub_level_id']);
        });
        Schema::dropIfExists('book_categories');
    }
}
