<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRfqsyscopeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rfq_workscope', function (Blueprint $table) {
          $table->integer('rfq_id')->unsigned();
          $table->integer('workscope_id')->unsigned();

          $table->unique(['rfq_id', 'workscope_id']);
          $table->foreign('rfq_id')->references('id')->on('rfqs')
              ->onDelete('cascade')->onUpdate('cascade');
          $table->foreign('workscope_id')->references('id')->on('workscopes')
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
        Schema::dropIfExists('rfq_workscope');
    }
}
