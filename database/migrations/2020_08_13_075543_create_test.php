<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test', function (Blueprint $table){
            
            $table->id();
            $table->foreignId('Goal_id');
            $table->foreignId('course_id');
            $table->foreignId('subCourse_id');
            $table->foreignId('teacher_id');
            $table->text('Questions');
            $table->text('Option1');
            $table->text('Option2');
            $table->text('Option3');
            $table->text('Option4');
            $table->text('Marathi_Question')->nullable();
            $table->text('Marathi_Option1')->nullable();
            $table->text('Marathi_Option2')->nullable();
            $table->text('Marathi_Option3')->nullable();
            $table->text('Marathi_Option4')->nullable();
            $table->string('Correct_option');
            $table->Integer('time');
            $table->text('Negative_marks');
            $table->timestamps();

            $table->foreign('course_id')
            ->references('id')
            ->on('courses')
            ->onDelete('cascade');

            $table->foreign('subCourse_id')
            ->references('id')
            ->on('subcourses')
            ->onDelete('cascade');
            
            $table->foreign('Goal_id')
            ->references('id')
            ->on('goals')
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
        Schema::dropIfExists('test');
    }
}
