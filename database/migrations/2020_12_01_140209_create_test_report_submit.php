<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestReportSubmit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_report_submit', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id');
            $table->text('email');
            $table->text('issue');
            $table->timestamps();

            $table->foreign('question_id')
            ->references('id')
            ->on('test')
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
        Schema::dropIfExists('_test_report_submit');
    }
}
