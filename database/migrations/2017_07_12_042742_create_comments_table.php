<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('post_id')->nullable()->unsigned();
            $table->integer('course_id')->nullable()->unsigned();
            $table->integer('lesson_id')->nullable()->unsigned();
            $table->tinyInteger('is_flagged');
            $table->text('body');
            $table->timestamps();
        });
        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('CASCADE');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('CASCADE');
            $table->foreign('lesson_id')->references('id')->on('course_lessons')->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
