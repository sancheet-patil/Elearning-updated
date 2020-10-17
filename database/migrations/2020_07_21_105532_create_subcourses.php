<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcourses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('goal_id');
            $table->foreignId('course_id');
            $table->string('subCourses_name');
            $table->timestamps();

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
        Schema::dropIfExists('subcourses');
    }
}
