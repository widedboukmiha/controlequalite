<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\certificat;

class certificatController extends Controller
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
         $certificat = certificat::orderBy(
               'id' 
          /* , 'code_certificat' */
           , 'type_produit'
           , 'nom_certificat'
           , 'marque_fabrication' 
           , 'format_emballage' 
           , 'date_fabrication'
           , 'date_limite_consom'
           , 'quantite_globale'
           , 'date_envoi_echantillon'
           , 'destination'
           , 'resultat_analyse'
           , 'poids_brut'
           , 'poids_net'
             )->paginate(5);
        return view('certificatCRUD.index',compact('certificat'))
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
        return view('certificatCRUD.create');
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


     
          /*'code_certificat' => 'required',*/
          'nom_emballage'=> 'required',
          'nom_transitaire'=> 'required',
          'pays_dorigine' => 'required',
          'destination' => 'required',
          'moyen_transport' => 'required',
          'lieu' => 'required',
          'date_certificat' => 'required',
          'bureau_douane' => 'required',
          'validite' => 'required'
            
        ]);

        certificat::create($request->all());
        return redirect()->route('certificatCRUD.index')
                        ->with('success','certificat created successfully');
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
         $certificat = certificat::find($id);
        return view('certificatCRUD.show',compact('certificat'));
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
          $certificat = certificat::find($id);
        return view('certificatCRUD.edit',compact('certificat'));
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


         /* 'code_certificat' => 'required',*/
          'nom_emballage'=> 'required',
          'nom_transitaire'=> 'required',
          'pays_dorigine' => 'required',
          'destination' => 'required',
          'moyen_transport' => 'required',
          'lieu' => 'required',
          'date_certificat' => 'required',
          'bureau_douane' => 'required',
          'validite' => 'required'
            
        ]);

        certificat::find($id)->update($request->all());
        return redirect()->route('certificatCRUD.index')
                        ->with('success','certificat updated successfully');
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
         certificat::find($id)->delete();
        return redirect()->route('certificatCRUD.index')
                        ->with('success','certificat deleted successfully');
    }
}
