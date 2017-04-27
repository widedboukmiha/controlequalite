<?php

namespace App\Http\Controllers;
include __DIR__.'/Http/Controllers/VueControlleurController.php';
use Illuminate\Http\Request;

class navController extends Controller
{
    //

   public function index()
    {
        //
        return view('navbar.nav');
    }

    public function afficherprelevement()
     {
                //
            return view('prelevCRUD.indexr');

     }
}
