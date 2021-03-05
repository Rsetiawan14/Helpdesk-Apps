<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstreportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mstreport', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_req');
            $table->string('laporan');
            $table->text('catatan_req');
            $table->string('nama_tech');
            $table->text('catatan_tech');
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
        Schema::dropIfExists('mstreport');
    }
}
