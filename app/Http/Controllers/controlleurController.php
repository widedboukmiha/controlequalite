<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Controlleur;

class controlleurController extends Controller
{
     //
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     //
         $controlleur = Controlleur::orderBy(
             'id' 
           , 'nom'
           , 'prenom'
         
             )->paginate(5);
        return view('controlleur.index',compact('controlleur'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }



}
