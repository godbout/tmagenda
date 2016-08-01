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
            $table->string('opening');
            $table->string('welcome');
            $table->string('tme');
            $table->string('speaker1');
            $table->string('speaker2');
            $table->string('speaker3');
            $table->string('speaker4');
            $table->string('tablemaster');
            $table->string('evaluator1');
            $table->string('evaluator2');
            $table->string('evaluator3');
            $table->string('evaluator4');
            $table->string('timer');
            $table->string('ahcounter');
            $table->string('grammarian');
            $table->string('general');
            $table->string('closing');
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
        Schema::drop('agendas');
    }
}
