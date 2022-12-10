<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_kategories', function (Blueprint $table) {
            $table->unsignedBigInteger('ops_id');
            $table->foreign('ops_id')->references('id')->on('opds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_kategories', function (Blueprint $table) {
            $table->dropForeign(['ops_id']);
            $table->dropColumn('ops_id');
        });
    }
};
