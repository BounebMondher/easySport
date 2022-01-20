<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('match_id');
            $table->integer('id_team1');//home team
            $table->integer('id_team2');//away team
            $table->integer('id_coach1');// team coach that match
            $table->integer('id_coach2');
            $table->integer('id_refree');// match refree
            $table->integer('score1');//home team score
            $table->integer('score2');//away team score
            $table->integer('id_motm');//man of the match
            $table->integer('id_stadium');
            $table->integer('id_competition');//if null then friendly match
            $table->date('date');
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
        Schema::dropIfExists('matches');
    }
}
