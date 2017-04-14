<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bonrefoulement extends Model
{
    //
          
     public $fillable = [
         /*'code_refoulement',*/
     'date_refoulement',
     'motif_refoulement'
     ];



    public function articles()
    {
        return $this->belongsToMany('App\article');
       
    }


    public function exportateurs(){
 
           return $this->belongsTo('App\exportateur');    
    }
}
