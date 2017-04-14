<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class certificat extends Model
{
    //
    public $fillable = [
         /* 'code_certificat' ,*/
          'nom_emballage',
          'nom_transitaire',
          'pays_dorigine',
          'destination',
          'moyen_transport',
          'lieu',
          'date_certificat',
          'bureau_douane',
          'validite'
    ];


     public function exportateurs(){
 
           return $this->belongsTo('App\exportateur');    
      }
}
