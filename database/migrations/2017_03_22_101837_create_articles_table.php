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
        //
         Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('code_article');
            $table->string('type_produit');
            $table->string('nom_article');
            $table->string('marque_fabrication');
            $table->string('format_emballage');
            $table->date('date_fabrication');
            $table->date('date_limite_consom');
            $table->string('quantite_globale');
            $table->date('date_envoi_echantillon');
            $table->string('destination');
            $table->string('resultat_analyse');
            $table->string('poids_brut');
            $table->string('poids_net');
           // $table->string('nombre_article');
           
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
        //
        Schema::drop('articles');
  
    }
}
