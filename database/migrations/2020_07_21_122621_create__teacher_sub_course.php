<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherSubCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_sub_course', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('subCourse_id')->unsigned(); 
            $table->bigInteger('teacher_id')->unsigned();
            $table->tinyInteger('status')->default('1');
            $table->timestamps();

            $table->foreign('subCourse_id')
            ->references('id')
            ->on('subcourses')
            ->onDelete('cascade');

            $table->foreign('teacher_id')
            ->references('id')
            ->on('teachers')
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
        Schema::dropIfExists('_teacher_sub_course');
    }
}
