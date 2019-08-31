<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('paper_sbmission_mode');
            $table->string('paper_id')->unique();
            $table->string('area_of_paper');
            $table->string('title');
            $table->string('authors_with_address');
            $table->string('mode_of_presentation');
            $table->string('mode_of_payment');
            $table->string('dd_no');
            $table->string('dd_date');
            $table->string('dd_bank');
            $table->string('transation_id');
            $table->string('transaction_bank');
            $table->boolean('apporved');
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
        Schema::dropIfExists('submissions');
    }
}
