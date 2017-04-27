<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\controlleur;

 class navbarController extends Controller 
{

public function manageVue(){
    return view('manage-vue');
}
public function index (){
    return view ('navbar.nav');
}

}