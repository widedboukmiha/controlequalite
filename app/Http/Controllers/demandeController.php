<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\demande;
use Illuminate\Support\Facades\Input;


class demandeController extends Controller
{

    public function __construct(Request $request)
    {
        /*
      $date_demande = Input::get('date_demande') ;
      $date_demande = 'readOnly' ;
      */


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     //
         $demande = demande::orderBy(
           'id',  
           'nature_demande',
           'date_demande'
   
            )->paginate(5);
       return view('vendor.adminlte.demande.index',compact('demande'))
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
        return view('vendor.adminlte.demande.create');
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
           /* 'num_demande' => 'required',
            'nature_demande' => 'required',
            'date_demande' => 'required',*/
        ]);

        $demande = demande::create($request->all());
        $demande->articles()->sync($request->get('articles'));

        return redirect()->route('vendor.adminlte.demande.create' )
                        ->with('success','demande created successfully');

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
         $demande = demande::find($id);
     //   return view('demandeCRUD.show',compact('demande'));
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
          $demande = demande::find($id);
       // return view('demandeCRUD.edit',compact('demande'));
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
            /*'num_demande' => 'required',
            'nature_demande' => 'required',
            'date_demande' => 'required',*/
        ]);

        demande::find($id)->update($request->all());
       // return redirect()->route('demandeCRUD.index')
                        //->with('success','demande updated successfully');
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
         demande::find($id)->delete();
      //  return redirect()->route('demandeCRUD.index')
                       // ->with('success','demande deleted successfully');
    }
}
