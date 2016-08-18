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
            $table->integer('project1_type')->unsigned()->nullable();
            $table->string('project1_title');
            $table->integer('project2_type')->unsigned()->nullable();
            $table->string('project2_title');
            $table->integer('project3_type')->unsigned()->nullable();
            $table->string('project3_title');
            $table->integer('project4_type')->unsigned()->nullable();
            $table->string('project4_title');
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
            $table->dropColumn('project1_type');
            $table->dropColumn('project1_title');
            $table->dropColumn('project2_type');
            $table->dropColumn('project2_title');
            $table->dropColumn('project3_type');
            $table->dropColumn('project3_title');
            $table->dropColumn('project4_type');
            $table->dropColumn('project4_title');
        });
    }
}
