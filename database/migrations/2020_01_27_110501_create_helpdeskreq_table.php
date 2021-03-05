<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHelpdeskreqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('helpdeskreq', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_req');
            $table->string('div_user');
            $table->string('information_req');
            $table->date('date_req');
            $table->string('name_tech');
            $table->date('date_solve');
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
        Schema::dropIfExists('helpdeskreq');
    }
}
