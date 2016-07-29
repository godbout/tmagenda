<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->time('time');
            $table->string('room');
            $table->string('theme');
            $table->integer('opening');
            $table->integer('welcome');
            $table->integer('tme');
            $table->integer('speaker1');
            $table->integer('speaker2');
            $table->integer('speaker3');
            $table->integer('speaker4');
            $table->integer('tablemaster');
            $table->integer('evaluator1');
            $table->integer('evaluator2');
            $table->integer('evaluator3');
            $table->integer('evaluator4');
            $table->integer('timer');
            $table->integer('ahcounter');
            $table->integer('grammarian');
            $table->integer('general');
            $table->integer('closing');
            $table->timestamps();

            $table->foreign('opening')->references('id')->on('members');
            $table->foreign('welcome')->references('id')->on('members');
            $table->foreign('tme')->references('id')->on('members');
            $table->foreign('speaker1')->references('id')->on('members');
            $table->foreign('speaker2')->references('id')->on('members');
            $table->foreign('speaker3')->references('id')->on('members');
            $table->foreign('speaker4')->references('id')->on('members');
            $table->foreign('tablemaster')->references('id')->on('members');
            $table->foreign('evaluator1')->references('id')->on('members');
            $table->foreign('evaluator2')->references('id')->on('members');
            $table->foreign('evaluator3')->references('id')->on('members');
            $table->foreign('evaluator4')->references('id')->on('members');
            $table->foreign('timer')->references('id')->on('members');
            $table->foreign('ahcounter')->references('id')->on('members');
            $table->foreign('grammarian')->references('id')->on('members');
            $table->foreign('general')->references('id')->on('members');
            $table->foreign('closing ')->references('id')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('agendas');
    }
}
