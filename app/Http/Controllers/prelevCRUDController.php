<?php

namespace App\Http\Controllers;

use Request;
use App\prelevement;
use App\exportateur;
use Barryvdh\DomPDF\Facade as PDF;
class prelevCRUDController extends Controller
{
    //
    public function index(Request $request)
    {

      $search = Request::get('search');
      $prelevements = prelevement::where('nombre_article','like','%'.$search.'%')->orderBy('id')->paginate(5);
      return view('vendor.adminlte.prelevCRUD.index',compact('prelevements'));



    //    $prelevements = prelevement::orderBy('id','date_pv','nombre_article','observation','num_bordereau_envoi'  ,'exportateur_id'
       
    //    )->paginate(5);
    //     return view('prelevCRUD.index',compact('prelevements'))->with('i', ($request->input('page', 1) - 1) * 5); 
    // 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('prelevCRUD.create');
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
           
            'date_pv' => 'required',
            'nombre_article' => 'required',
            'observation' => 'required',
            'num_bordereau_envoi' => 'required',
           
        ]);

       $prelevement =  prelevement::create($request->all());
       $prelevement->articles()->sync($request->get('articles'));
        
         $exportateur = exportateur::pluck('nom_exportateur' , 'id');
        return redirect()->route('prelevCRUD.index' , $exportateur )
                        ->with('success','prelev created successfully');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prelevements = prelevement::find($id);
       // return view('prelevCRUD.show',compact('prelevements'));
         $pdf = PDF::loadView('prelevCRUD.show' ,compact('prelevements'));
         return $pdf->stream('show.pdf');
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
         $prelevement = prelevement::find($id);
        return view('prelevCRUD.edit',compact('prelevement'));
    }

   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



     public function editItem(Request $req) {
      $prelevements = prelevement::find ($req->id);
      $prelevements->date_pv = $req->date_pv;
      $prelevements->nombre_article = $req->nombre_article;
      $prelevements->observation = $req->observation;
     $prelevements->num_bordereau_envoi = $req->num_bordereau_envoi;

      $prelevements->save();
      return response()->json($prelevements);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
           /*  'num_pv' => 'required',*/
            'date_pv' => 'required',
            'nombre_article' => 'required',
            'observation' => 'required',
            'num_bordereau_envoi' => 'required',
        ]);

        prelevement::find($id)->update($request->all());
        $prelevement = prelevement::findOrFail($id);
        $prelevement->update($request->all());
        $prelevement->articles()->sync($request->get('articles'));

        return redirect()->route('prelevCRUD.index')
                        ->with('success','Item updated successfully');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        prelevement::find($id)->delete();
        return redirect()->route('prelevCRUD.index')
                        ->with('success','Item deleted successfully');
    }


}
