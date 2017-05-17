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

    public function article()
    {
        return $this->hasOne('App\article');
    }
    
    // public function laboratoires()
    // {
    //     return $this->belongsToMany('App\laboratoire');
       
    // }
}
