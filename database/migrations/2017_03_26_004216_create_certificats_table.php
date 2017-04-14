<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificats', function (Blueprint $table) {
            $table->increments('id');
           // $table->string('code_certificat');
            $table->string('nom_emballage');
            $table->string('nom_transitaire');
            $table->string('pays_dorigine');
            $table->string('destination');
            $table->string('moyen_transport');
            $table->string('lieu');
            $table->date('date_certificat');
            $table->string('bureau_douane');
            $table->string('validite');
            $table->integer('exportateur_id')->unsigned()->index();
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
        Schema::dropIfExists('certificats');
    }
}
