<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\laboratoire;

class laboratoireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $laboratoire = laboratoire::orderBy('id','nom_laboratoire' , 'adresse_laboratoire')->paginate(5);
        return view('vendor.adminlte.laboratoire.index',compact('laboratoire'))
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
        return view('laboratoire.create');
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
            'nom_laboratoire'  => 'required' ,
            'adresse_laboratoire'  => 'required' ,
           
        ]);


        $laboratoire = laboratoire::create($request->all());
        $laboratoire->analyses()->sync($request->get('analyses'));
        return redirect()->route('laboratoire.index' )
                        ->with('success','laboratoire created successfully');

          
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
         $laboratoire = laboratoire::find($id);
        return view('laboratoire.show',compact('laboratoire'));
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
          $laboratoire = laboratoire::find($id);
        return view('laboratoire.edit',compact('laboratoire'));
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
            'nom_laboratoire'  => 'required' ,
            'adresse_laboratoire'  => 'required' ,
           
        ]);

        laboratoire::find($id)->update($request->all());
        return redirect()->route('laboratoire.index')
                        ->with('success','laboratoire updated successfully');
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
         laboratoire::find($id)->delete();
        return redirect()->route('laboratoire.index')
                        ->with('success','laboratoire deleted successfully');
    }
}
