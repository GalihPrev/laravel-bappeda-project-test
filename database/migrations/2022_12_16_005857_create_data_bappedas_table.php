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

        Schema::create('data_bappedas', function (Blueprint $table) {
            $table->id();
            $table->text('permasalahan',)->required();
            $table->text('penyebab')->required();
            $table->text('lokasi')->required();
            $table->text('usulan')->required();
            $table->text('keterangan');
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('kelurahan_id');
            $table->unsignedBigInteger('form_aspirasi_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('kelurahan_id')->references('id')->on('kelurahans');
            $table->foreign('form_aspirasi_id')->references('id')->on('form_aspirasis')->nullable();

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
    //  drop table and foreign key
        Schema::table('data_bappedas', function (Blueprint $table) {
            $table->dropForeign(['users_id']);
            $table->dropForeign(['kelurahan_id']);
            $table->dropForeign(['form_aspirasi_id']);
        });
        Schema::dropIfExists('data_bappedas');


    }
};
