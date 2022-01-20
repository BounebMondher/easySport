<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_players', function (Blueprint $table) {
            $table->increments('match_players_id');
            $table->integer('id_match');
            $table->integer('id_player');
            $table->string('starting');//starting or benched
            $table->integer('goals');//number of goals
            $table->integer('assists');//number of assists
            $table->string('is_captain');
            $table->integer('yellow card');
            $table->integer('red card');
            $table->integer('motm');// (+1 for each vote) // default 0
            $table->integer('did_vote');//(0 for no, 1 for yes) // default 0
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
        Schema::dropIfExists('match_players');
    }
}
