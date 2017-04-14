<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalyseLaboratoireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analyse_laboratoire', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('analyse_id')->unsigned()->index();
            $table->foreign('analyse_id')->references('id')->on('analyses')->onDelete('cascade');
 
            $table->integer('laboratoire_id')->unsigned()->index();
            $table->foreign('laboratoire_id')->references('id')->on('laboratoires')->onDelete('cascade');
 
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
        Schema::dropIfExists('analyse_laboratoire');
    }
}
