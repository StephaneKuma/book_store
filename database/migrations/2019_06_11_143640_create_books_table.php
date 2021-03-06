<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('sub_category_id');
            $table->foreign('sub_category_id')
                ->references('id')
                ->on('book_sub_categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('title');
            $table->unsignedBigInteger('sub_level_id');
            $table->foreign('sub_level_id')
                ->references('id')
                ->on('sub_levels')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('image');
            $table->float('price');
            $table->text('description');
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
        Schema::table('book', function (Blueprint $table) {
            $table->dropForeign([
                'user_id',
                'sub_category_id',
                'sub_level_id',
            ]);
        });
        Schema::dropIfExists('book');
    }
}
