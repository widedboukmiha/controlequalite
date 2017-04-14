<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class demande extends Model
{
    //
    public $table ='demande';
    public $fillable = [/*'num_demande',*/'nature_demande','date_demande'];

    public function exportateurs()
    {
        return $this->belongsTo('App\exportateur');
    }

}
