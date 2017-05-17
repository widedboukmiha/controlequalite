<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    //

      public $fillable = 


   [
             'id' 
           , 'type_produit'
           , 'nom_article'
           , 'marque_fabrication' 
           , 'format_emballage' 
           , 'date_fabrication'
           , 'date_limite_consom'
           , 'quantite_globale'
           , 'date_envoi_echantillon'
           , 'destination'
           , 'resultat_analyse'
           , 'poids_brut'
           , 'poids_net'
           , 'certificat_id'
           , 'bonrefoulement_id'
     

  ];


     public function certificats(){
 
           return $this->belongsTo('App\certificat');    
      }

    public function bonrefoulements(){
 
           return $this->belongsTo('App\bonrefoulement');    
      }
 
     public function analyse()
    {
        return $this->belongsTo('App\analyse');
    }

    public function demandes()
    {
        return $this->belongsToMany('App\demande');
       
    }
}
