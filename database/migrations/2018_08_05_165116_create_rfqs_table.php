<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRfqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rfqs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('ref');
            $table->integer('user_id');
            $table->string('status');
            $table->string('revision');
            $table->integer('project_id');
            $table->integer('client_id');
            $table->integer('contact_id');
            $table->string('holder');
            $table->double('margin');
            $table->integer('win_chance');
            $table->integer('updated_by');
            $table->string('receiving_method');
            $table->string('delivery_place');
            $table->string('relationship_level');
            $table->string('bidding_time');
            $table->string('expected_order_date');
            $table->string('client_due_date');
            $table->string('expected_completion_date');
            $table->string('costing_starting_date');
            $table->string('poposal_date');
            $table->integer('presales_manager_id');
            $table->integer('sales_mangaer_id');
            $table->integer('sales_engineer_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rfqs');
    }
}
