<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chargement extends Model
{
         public $fillable = [     
          'date_exportation',
          'quantite_exportation'    
    ];
}
