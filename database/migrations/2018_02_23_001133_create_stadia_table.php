<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStadiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stadiums', function (Blueprint $table) {
            $table->increments('stadium_id');
            $table->string('name');
            $table->string('address');
            $table->string('telephone');
            $table->string('email');
            $table->string('itinerary');//taxis, Metro, Bus ...
            $table->mediumText('infos');//vestiaires, type gazon ...
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
        Schema::dropIfExists('stadia');
    }
}
