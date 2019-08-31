<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeNullableColumnSubmission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('submissions', function($table)
        {
            $table->string('paper_submission_mode', 50)->nullable()->change();
            $table->string('paper_id', 50)->nullable()->change();
            $table->string('area_of_paper', 50)->nullable()->change();
            $table->string('title', 50)->nullable()->change();
            $table->string('authors_with_address', 190)->nullable()->change();
            $table->string('mode_of_presentation', 50)->nullable()->change();
            $table->string('mode_of_payment', 50)->nullable()->change();
            $table->string('dd_no', 50)->nullable()->change();
            $table->string('dd_date', 50)->nullable()->change();
            $table->string('dd_bank', 50)->nullable()->change();
            $table->string('transation_id', 50)->nullable()->change();
            $table->string('transaction_bank', 50)->nullable()->change();
            $table->string('paper_submission_mode', 50)->nullable()->change();
            $table->string('paper_submission_mode', 50)->nullable()->change();
            $table->string('paper_submission_mode', 50)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('submissions', function($table)
        {
            $table->string('paper_submission_mode', 50)->nullable()->change();
            $table->string('paper_id', 50)->nullable()->change();
            $table->string('area_of_paper', 50)->nullable()->change();
            $table->string('title', 50)->nullable()->change();
            $table->string('authors_with_address', 190)->nullable()->change();
            $table->string('mode_of_presentation', 50)->nullable()->change();
            $table->string('mode_of_payment', 50)->nullable()->change();
            $table->string('dd_no', 50)->nullable()->change();
            $table->string('dd_date', 50)->nullable()->change();
            $table->string('dd_bank', 50)->nullable()->change();
            $table->string('transation_id', 50)->nullable()->change();
            $table->string('transaction_bank', 50)->nullable()->change();
            $table->string('paper_submission_mode', 50)->nullable()->change();
            $table->string('paper_submission_mode', 50)->nullable()->change();
            $table->string('paper_submission_mode', 50)->nullable()->change();
        });
    }
}
