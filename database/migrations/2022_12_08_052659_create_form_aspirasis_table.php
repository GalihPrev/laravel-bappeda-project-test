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
        Schema::create('form_aspirasis', function (Blueprint $table) {
            $table->id();
            $table->text('permasalahan',)->required();
            $table->text('penyebab')->required();
            $table->text('lokasi')->required();
            $table->text('usulan')->required();
            $table->text('keterangan');
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
        Schema::dropIfExists('form_aspirasis');
    }
};
