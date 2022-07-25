<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeBreaktimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('breaktimes', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->foreignId('attendaces_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('breaktimes', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('attendaces_id');
        });
    }
}
