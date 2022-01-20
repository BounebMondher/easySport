<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('team_id');
            $table->integer('id_creator');
            $table->integer('id_coach');
            $table->string('name');
            $table->string('nickname');
            $table->string('gender');
            $table->string('age range');//under 18, over 30, over 35, over 40 ...
            $table->string('type');//club, association, school/university, friends, entreprise
            $table->integer('id_stadium');
            $table->integer('year');
            $table->string('telephone');
            $table->string('email');
            $table->string('address');
            $table->string('country');
            $table->string('time zone');
            $table->string('logo');
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
        Schema::dropIfExists('teams');
    }
}
