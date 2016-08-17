<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProjectsToMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('meetings', function (Blueprint $table) {
            $table->json('project1_details');
            $table->json('project2_details');
            $table->json('project3_details');
            $table->json('project4_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('meetings', function (Blueprint $table) {
            $table->dropColumn('project1_details');
            $table->dropColumn('project2_details');
            $table->dropColumn('project3_details');
            $table->dropColumn('project4_details');
        });
    }
}
