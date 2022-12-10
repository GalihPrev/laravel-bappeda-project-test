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
            $table->unsignedBigInteger('aspirasi_id');
            $table->foreign('aspirasi_id')->references('id')->on('form_aspirasis');
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
            $table->dropForeign(['aspirasi_id']);
            $table->dropColumn('aspirasi_id');
        });
    }
};
