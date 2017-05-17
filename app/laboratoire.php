<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laboratoire extends Model
{
    //
     public $fillable = [      
          'nom_laboratoire',
          'adresse_laboratoire'       
    ];

    // public function analyses()
    // {
    //     return $this->belongsToMany('App\analyse');
       
    // }

}
