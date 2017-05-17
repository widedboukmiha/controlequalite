<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrelevementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('prelevements', function (Blueprint $table) {
            $table->increments('id');
              $table->date('date_pv');
              $table->string('nombre_article');
              $table->string('nombre_echantillon');
              $table->string('observation');
              $table->integer('num_bordereau_envoi');
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
        Schema::dropIfExists('prelevements');
    }
}
