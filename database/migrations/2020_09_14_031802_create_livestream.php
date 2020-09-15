<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivestream extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livestream', function (Blueprint $table) {
            $table->id();
            $table->foreignId('goal_id'); 
            $table->foreignId('course_id');
            $table->foreignId('subcourse_id');
            $table->foreignId('teacher_id');
            $table->text('Topic');
            $table->text('Password');
            $table->float('Duration');
            $table->timestamps();




            $table->foreign('teacher_id')
            ->references('id')
            ->on('teachers')
            ->onDelete('cascade');

            $table->foreign('subcourse_id')
            ->references('id')
            ->on('subcourses')
            ->onDelete('cascade');

            $table->foreign('course_id')
            ->references('id')
            ->on('courses')
            ->onDelete('cascade');

            $table->foreign('goal_id')
            ->references('id')
            ->on('goals')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livestream');
    }
}
