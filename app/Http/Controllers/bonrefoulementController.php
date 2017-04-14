<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bonrefoulement;

class bonrefoulementController extends Controller
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
         $bonrefoulement = bonrefoulement::orderBy('id',/*'code_refoulement',*/'date_refoulement', 'motif_refoulement')->paginate(5);
        return view('bonrefoulementCRUD.index',compact('bonrefoulement'))
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
        return view('bonrefoulementCRUD.create');
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
             'date_refoulement'  => 'required', 
             'motif_refoulement'  => 'required' ,
           
        ]);


        $bonrefoulement = bonrefoulement::create($request->all());
        $bonrefoulement->articles()->sync($request->get('articles'));
        return redirect()->route('bonrefoulementCRUD.index' )
                        ->with('success','bon refoulement created successfully');

          
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
         $bonrefoulement = bonrefoulement::find($id);
        return view('bonrefoulementCRUD.show',compact('bonrefoulement'));
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
          $bonrefoulement = bonrefoulement::find($id);
        return view('bonrefoulementCRUD.edit',compact('bonrefoulement'));
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
             'date_refoulement'  => 'required', 
             'motif_refoulement'  => 'required' ,
           
        ]);

        bonrefoulement::find($id)->update($request->all());
        return redirect()->route('bonrefoulementCRUD.index')
                        ->with('success','bonrefoulement updated successfully');
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
         bonrefoulement::find($id)->delete();
        return redirect()->route('bonrefoulementCRUD.index')
                        ->with('success','bonrefoulement deleted successfully');
    }
}
