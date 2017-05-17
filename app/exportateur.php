<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exportateur extends Model
{
    //

        public $fillable = [
            'nom_exportateur',
            'adresse_exportateur'
        ];


           public function demandes() {

                return $this->hasMany('App\demande');
             }
  

           public function certificats(){

                return $this->hasMany('App\certificat'); 
            }

          public function bonrefoulements(){

                return $this->hasMany('App\bonrefoulement'); 
            }


}
