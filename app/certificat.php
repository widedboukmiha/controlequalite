<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class certificat extends Model
{
    //
    public $fillable = [
          'nom_emballage',
          'nom_transitaire',
          'pays_dorigine',
          'destination',
          'moyen_transport',
          'lieu',
          'date_certificat',
          'bureau_douane',
          'validite',
           'exportateur_id' ,
           'controlleur_id'
    ];

     public function exportateurs(){
 
           return $this->belongsTo('App\exportateur');    
      }

      
     public function controlleurs(){
 
           return $this->belongsTo('App\controlleur');    
      }  

      public function articles() {

                return $this->hasMany('App\article');
      }    

}
