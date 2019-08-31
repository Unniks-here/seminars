<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnSubmission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('submissions', function(Blueprint $table) {
            $table->renameColumn('paper_sbmission_mode', 'paper_submission_mode');
            $table->renameColumn('apporved', 'approved');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('submissions', function(Blueprint $table) {
            $table->renameColumn('paper_sbmission_mode', 'paper_submission_mode');
            $table->renameColumn('apporved', 'approved');
        });
    }
}
