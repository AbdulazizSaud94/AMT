<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToRfqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rfqs', function (Blueprint $table) {
            $table->string('title');
            $table->string('description');
            $table->string('project_type');
            $table->string('approved_by');
            $table->string('rejected_by');
            $table->string('justification');
            $table->string('recommendation');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rfqs', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('description');
            $table->dropColumn('project_type');
            $table->dropColumn('approved_by');
            $table->dropColumn('rejected_by');
            $table->dropColumn('justification');
            $table->dropColumn('recommendation');

        });
    }
}
