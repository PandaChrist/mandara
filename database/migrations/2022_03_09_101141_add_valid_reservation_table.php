<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddValidReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('validReservation', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('idReservation');
            $table->foreign('idReservation')->references('id')->on('reservation')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('idTable');
            $table->foreign('idTable')->references('id')->on('tables')->onUpdate('cascade')->onDelete('cascade');
            
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
        Schema::dropIfExists('validReservation');
    }
}
