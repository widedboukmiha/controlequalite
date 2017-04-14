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
     

  ];


    public function prelevements()
    {
        return $this->belongsToMany('App\prelevement');
       
    }

   public function chargements()
    {
        return $this->belongsToMany('App\chargement');
       
    }


    public function analyses()
    {
        return $this->belongsToMany('App\analyse');
       
    }


    public function bonrefoulements()
    {
        return $this->belongsToMany('App\bonrefoulement');
       
    }




  /*  public function SetPrelevementsListAttribute($value){

       return $this->prelevements()->sync($value);


    }

       public function getPrelevementsListAttribute(){
           
           if ($this->id){
                   return $this->prelevements->pluck('id') ;
           }
         

        
    }
    */

 
}
