<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRfqcompetitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rfq_competitor', function (Blueprint $table) {
          $table->integer('rfq_id')->unsigned();
          $table->integer('competitor_id')->unsigned();

          $table->unique(['rfq_id', 'competitor_id']);
          $table->foreign('rfq_id')->references('id')->on('rfqs')
              ->onDelete('cascade')->onUpdate('cascade');
          $table->foreign('competitor_id')->references('id')->on('competitors')
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
        Schema::dropIfExists('rfq_competitor');
    }
}
