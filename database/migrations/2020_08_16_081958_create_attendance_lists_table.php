<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendaceListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('attendance_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->boolean('presence')->default(0);
            $table->datetime('verified_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendace_lists');
    }
}
