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
        Schema::table('users', function (Blueprint $table) {
            $table -> unsignedBigInteger('kelurahan_id') -> after('role_id');
            $table -> foreign('kelurahan_id') -> references('id') -> on('kelurahans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table -> dropForeign(['kelurahan_id']);
            $table -> dropColumn('kelurahan_id');
        });
    }
};
