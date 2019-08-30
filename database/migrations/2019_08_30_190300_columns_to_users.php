<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ColumnsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('designation')->nullable();
            $table->string('address')->nullable();
            $table->string('institution')->nullable();
            $table->string('city')->nullable();
            $table->string('pincode')->nullable();
            $table->string('country')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('category')->nullable();
            $table->string('participant_type')->nullable();
            $table->string('accomadation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('designation');
            $table->dropColumn('address');
            $table->dropColumn('institution');
            $table->dropColumn('city');
            $table->dropColumn('pincode');
            $table->dropColumn('country');
            $table->dropColumn('mobile');
            $table->dropColumn('category');
            $table->dropColumn('participant_type');
            $table->dropColumn('accomadation');
        });
    }
}
