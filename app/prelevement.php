<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prelevement extends Model
{
    //
      public $fillable = ['date_pv','nombre_article','observation','num_bordereau_envoi' ];


         public function articles()
                {
                    return $this->belongsToMany('App\article');
                    
                }


                //plusieurs

        public function exportateurs(){

             return $this->belongsTo('App\exportateur');
               
         }
}
