<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRfqdevisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rfq_devision', function (Blueprint $table) {
          $table->integer('rfq_id')->unsigned();
          $table->integer('devision_id')->unsigned();

          $table->unique(['rfq_id', 'devision_id']);
          $table->foreign('rfq_id')->references('id')->on('rfqs')
              ->onDelete('cascade')->onUpdate('cascade');
          $table->foreign('devision_id')->references('id')->on('devisions')
              ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rfq_devision');
    }
}
