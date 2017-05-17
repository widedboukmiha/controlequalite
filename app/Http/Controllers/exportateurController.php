<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\exportateur;

class exportateurController extends Controller
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
         $exportateur = exportateur::orderBy(
             'id' ,
           'nom_exportateur'  ,
            'adresse_exportateur'  
         
             )->paginate(5);
        return view('vendor.adminlte.exportateur.index',compact('exportateur'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('exportateur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $this->validate($request, [
            'nom_exportateur'  => 'required' ,
            'adresse_exportateur'  => 'required' ,
           
        ]);


        $exportateur = exportateur::create($request->all());
        return redirect()->route('exportateur.index' )
                        ->with('success','exportateur created successfully');

          
         }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
         $exportateur = exportateur::find($id);
        return view('exportateur.show',compact('exportateur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
          $exportateur = exportateur::find($id);
        return view('exportateur.edit',compact('exportateur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $this->validate($request, [
            'nom_exportateur'  => 'required' ,
            'adresse_exportateur'  => 'required' ,
           
        ]);

        exportateur::find($id)->update($request->all());
        return redirect()->route('exportateur.index')
                        ->with('success','exportateur updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         exportateur::find($id)->delete();
        return redirect()->route('exportateur.index')
                        ->with('success','exportateur deleted successfully');
    }


}
