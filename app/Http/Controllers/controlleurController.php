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
        return view('vendor.adminlte.controlleur.index',compact('controlleur'))
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
        return view('controlleur.create');
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

             /*'code_refoulement'  => 'required' ,*/
             'nom'  => 'required', 
             'prenom'  => 'required' ,
           
        ]);


        $controlleur = controlleur::create($request->all());
        return redirect()->route('controlleur.index' )
                        ->with('success','controlleur created successfully');

          
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
         $controlleur = controlleur::find($id);
        return view('controlleur.show',compact('controlleur'));
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
          $controlleur = controlleur::find($id);
        return view('controlleur.edit',compact('controlleur'));
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
             /* 'code_refoulement'  => 'required' ,*/
             'nom'  => 'required', 
             'prenom'  => 'required' ,
           
        ]);

        controlleur::find($id)->update($request->all());
        return redirect()->route('controlleur.index')
                        ->with('success','controlleur updated successfully');
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
         controlleur::find($id)->delete();
        return redirect()->route('controlleur.index')
                        ->with('success','controlleur deleted successfully');
    }


}
