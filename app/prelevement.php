<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prelevement extends Model
{
     public $fillable = ['date_pv','nombre_article','nombre_echantillon' ,'observation','num_bordereau_envoi' ];
}
