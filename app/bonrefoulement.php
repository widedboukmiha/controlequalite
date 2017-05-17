<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bonrefoulement extends Model
{
    //
          
     public $fillable = [
     'date_refoulement',
     'motif_refoulement',
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
