<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeAttendacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('attendaces', function (Blueprint $table) {
            $table->foreignld('user_id')->constrained();
            $table->dateTime('start_time')->nullable();
            $table->dateTime('end_time')->nullble();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendaces', function (Blueprint $table) {
            $table->integer('user_id');
        });
    }
}
