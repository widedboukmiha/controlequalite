<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type_produit');
            $table->string('nom_article');
            $table->string('marque_fabrication');
            $table->string('format_emballage');
            $table->date('date_fabrication');
            $table->date('date_limite_consom');
            $table->float('quantite_globale');
            $table->date('date_envoi_echantillon');
            $table->string('destination');
            $table->string('resultat_analyse');
            $table->float('poids_brut');
            $table->float('poids_net');  
            $table->integer('certificat_id')->unsigned()->index(); 
            $table->integer('bonrefoulement_id')->unsigned()->index();     
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
        Schema::dropIfExists('articles');
    }
}
