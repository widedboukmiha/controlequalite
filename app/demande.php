<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class demande extends Model
{

    


       public $fillable = [
           'nature_demande',
           'date_demande',
           'date_exportation',
           'quantite_exportation' ,
            'date_pv',
           'nombre_article',
           'nombre_echantillon' ,
           'observation',
           'num_bordereau_envoi',
           'exportateur_id' ,
           'controlleur_id'

           ];





     public function exportateurs(){
 
           return $this->belongsTo('App\exportateur');    
      }

     public function controlleurs(){
 
           return $this->belongsTo('App\controlleur');    
      }

   public function articles()    {
         
        return $this->belongsToMany('App\article');
       
    }
   
}
