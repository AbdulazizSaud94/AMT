<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRfqdocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rfq_document', function (Blueprint $table) {
          $table->integer('rfq_id')->unsigned();
          $table->integer('document_id')->unsigned();

          $table->unique(['rfq_id', 'document_id']);
          $table->foreign('rfq_id')->references('id')->on('rfqs')
              ->onDelete('cascade')->onUpdate('cascade');
          $table->foreign('document_id')->references('id')->on('documents')
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
        Schema::dropIfExists('rfq_document');
    }
}
