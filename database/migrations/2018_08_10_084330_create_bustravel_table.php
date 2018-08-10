<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBustravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('migration');
        Schema::create('bustravel', function(Blueprint $table)
        {
        $table->increments('id_bustravel');
        $table->string('company_name');
        $table->text('address');
        $table->integer('establish');
        $table->string('type');
        $table->string('seat_details');
        $table->string('route_bus');
        $table->integer('price_grup');
        $table->integer('price_individual');
        $table->string('food')->nullable();
        $table->string('drink')->nullable();
        $table->string('tour_package')->nullable();
        $table->string('mutawif_id')->nullable();
        $table->string('mutawif_my')->nullable();
        $table->string('mutawif_local')->nullable();
        $table->string('insurance')->nullable();
        $table->string('internet_wifi')->nullable();
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
        Schema::dropIfExists('bustravel');
    }
}