<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class analyse extends Model
{
    //

     public $fillable = [
      
          'nature_analyse',
          'nom_analyse'
               
    ];


    
    public function laboratoires()
    {
        return $this->belongsToMany('App\laboratoire');
       
    }



    public function articles()
    {
        return $this->belongsToMany('App\article');
       
    }
}
