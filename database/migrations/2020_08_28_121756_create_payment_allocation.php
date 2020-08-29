<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentAllocation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_allocation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id');
            $table->foreignId('subcourse_id');
            $table->foreignId('teacher_id');
            $table->Integer('payment_percentage');
            $table->Integer('no_student_reffered');
            $table->Integer('reffered_students_percentage');
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_allocation');
    }
}
