<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRfqsystemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rfq_system', function (Blueprint $table) {
          $table->integer('rfq_id')->unsigned();
          $table->integer('system_id')->unsigned();

          $table->unique(['rfq_id', 'system_id']);
          $table->foreign('rfq_id')->references('id')->on('rfqs')
              ->onDelete('cascade')->onUpdate('cascade');
          $table->foreign('system_id')->references('id')->on('systems')
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
        Schema::dropIfExists('rfq_system');
    }
}
