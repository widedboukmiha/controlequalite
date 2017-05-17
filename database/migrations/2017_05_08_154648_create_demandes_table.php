<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nature_demande');
            $table->string('date_demande');
            $table->date('date_exportation');
            $table->string('quantite_exportation');
            $table->date('date_pv');
            $table->string('nombre_article');
            $table->string('nombre_echantillon');
            $table->string('observation');
            $table->integer('num_bordereau_envoi');
            $table->integer('exportateur_id')->unsigned()->index();
            $table->integer('controlleur_id')->unsigned()->index();
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
        Schema::dropIfExists('demandes');
    }
}
