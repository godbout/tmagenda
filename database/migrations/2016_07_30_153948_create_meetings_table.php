<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->time('time');
            $table->string('room');
            $table->string('theme');
            $table->integer('opening')->unsigned()->nullable();
            $table->integer('welcome')->unsigned()->nullable();
            $table->integer('tme')->unsigned()->nullable();
            $table->integer('speaker1')->unsigned()->nullable();
            $table->integer('project1_type')->unsigned()->nullable();
            $table->string('project1_title');
            $table->integer('speaker2')->unsigned()->nullable();
            $table->integer('project2_type')->unsigned()->nullable();
            $table->string('project2_title');
            $table->integer('speaker3')->unsigned()->nullable();
            $table->integer('project3_type')->unsigned()->nullable();
            $table->string('project3_title');
            $table->integer('speaker4')->unsigned()->nullable();
            $table->integer('project4_type')->unsigned()->nullable();
            $table->string('project4_title');
            $table->integer('tablemaster')->unsigned()->nullable();
            $table->integer('evaluator1')->unsigned()->nullable();
            $table->integer('evaluator2')->unsigned()->nullable();
            $table->integer('evaluator3')->unsigned()->nullable();
            $table->integer('evaluator4')->unsigned()->nullable();
            $table->integer('timer')->unsigned()->nullable();
            $table->integer('ahcounter')->unsigned()->nullable();
            $table->integer('grammarian')->unsigned()->nullable();
            $table->integer('general')->unsigned()->nullable();
            $table->integer('closing')->unsigned()->nullable();
            $table->boolean('coming');
            $table->timestamps();

            $table->foreign('opening')->references('id')->on('members');
            $table->foreign('welcome')->references('id')->on('members');
            $table->foreign('tme')->references('id')->on('members');
            $table->foreign('speaker1')->references('id')->on('members');
            $table->foreign('project1_type')->references('id')->on('projects');
            $table->foreign('speaker2')->references('id')->on('members');
            $table->foreign('project2_type')->references('id')->on('projects');
            $table->foreign('speaker3')->references('id')->on('members');
            $table->foreign('project3_type')->references('id')->on('projects');
            $table->foreign('speaker4')->references('id')->on('members');
            $table->foreign('project4_type')->references('id')->on('projects');
            $table->foreign('tablemaster')->references('id')->on('members');
            $table->foreign('evaluator1')->references('id')->on('members');
            $table->foreign('evaluator2')->references('id')->on('members');
            $table->foreign('evaluator3')->references('id')->on('members');
            $table->foreign('evaluator4')->references('id')->on('members');
            $table->foreign('timer')->references('id')->on('members');
            $table->foreign('ahcounter')->references('id')->on('members');
            $table->foreign('grammarian')->references('id')->on('members');
            $table->foreign('general')->references('id')->on('members');
            $table->foreign('closing')->references('id')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('meetings');
    }
}
