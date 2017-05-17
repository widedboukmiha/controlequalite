<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class controlleur extends Model
{
     public $fillable = [
         'nom',
         'prenom'
        ];

           public function demandes() {

                return $this->hasMany('App\demande');
             }
  

           public function certificats(){

                return $this->hasMany('App\certificat'); 
            }

          public function bonrefoulements(){

                return $this->hasMany('App\bonrefoulemen'); 
            }

}
