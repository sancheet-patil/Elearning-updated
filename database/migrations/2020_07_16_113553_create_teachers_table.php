<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('dob');
            $table->string('phone');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->integer('status')->default(0);
            $table->text('private_coaching')->nullable();
            $table->text('gov_teaching')->nullable();
            $table->text('youtube')->nullable();
            $table->text('telegram_admin')->nullable();
            $table->text('book_publish')->nullable();
            $table->text('stat_new_teaching')->nullable();
            $table->text('certification')->nullable();
            $table->string('equipment')->nullable();

            $table->text('doc_file')->nullable();
            $table->text('video_file')->nullable();
            $table->text('profile_image')->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
