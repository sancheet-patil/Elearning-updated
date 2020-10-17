<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreviousPapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previous_papers', function (Blueprint $table) {
            
            $table->id();
            $table->year('Year');
            $table->foreignId('goal_id');
            $table->foreignId('course_id');
            $table->foreignId('subcourse_id');
            $table->text('Question');
            $table->text('Option1');
            $table->text('Option2');
            $table->text('Option3');
            $table->text('Option4');
            $table->text('Answer');

            $table->timestamps();
            
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
        Schema::dropIfExists('previous_papers');
    }
}
