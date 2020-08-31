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
            $table->string('Name');
            $table->string('Subject');
            $table->text('Question');
            $table->text('Option1');
            $table->text('Option2');
            $table->text('Option3');
            $table->text('Option4');
            $table->text('Answer');

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
        Schema::dropIfExists('previous_papers');
    }
}
