<?php

namespace App\Http\Controllers;
use demande;
use Illuminate\Http\Request;



class menuController extends Controller
{

    public function index()
    {
            return view('menu') ;
    }


}
