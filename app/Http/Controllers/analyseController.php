<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\analyse;
class analyseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
          $analyse = analyse::orderBy('id','nature_analyse' , 'nom_analyse')->paginate(5);
        return view('analyse.index',compact('analyse'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
                return view('analyse.create');

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


        $analyse = analyse::create($request->all());
        $analyse->laboratoires()->sync($request->get('laboratoires'));
       // $analyse->articles()->sync($request->get('articles'));
        return redirect()->route('analyse.index' )
                        ->with('success','analyse created successfully');

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
          $analyse = analyse::find($id);
        return view('analyse.edit',compact('analyse'));
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
            'nature_analyse' => 'required',
             'nom_analyse' => 'required' 
                
        ]);

        analyse::find($id)->update($request->all());
        return redirect()->route('analyse.index')
                        ->with('success','analyse updated successfully');
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
    }
}
