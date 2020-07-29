<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubChapter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_chapter', function (Blueprint $table) {
            $table->id();
            $table->foreignId('syllabus_id');
            $table->text('SubchapterName');
            $table->timestamps();

            $table->foreign('syllabus_id')
            ->references('id')
            ->on('syllabus')
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
        Schema::dropIfExists('sub_chapter');
    }
}
