<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_admins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id');
            $table->foreignId('member_id');
            $table->string('Admin_name',100);
            $table->timestamps();

            $table->foreign('member_id')
            ->references('id')
            ->on('group_members')
            ->onDelete('cascade');

            $table->foreign('group_id')
            ->references('id')
            ->on('group_names')
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
        Schema::dropIfExists('group_admins');
    }
}
