<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('player_id');
            $table->integer('id_user');
            $table->string('first name');
            $table->string('last name');
            $table->string('email');
            $table->date('birth date');
            $table->string('nationality');
            $table->integer('height');
            $table->integer('weight');
            $table->string('telephone');
            $table->string('profile_pic');
            $table->string('nickname');
            $table->string('post');
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
        Schema::dropIfExists('players');
    }
}
