<?php

namespace App\Http\Controllers;

use App\Repositories\PrelevementRepository;
use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;
use App\article;

class articleController extends Controller
{
      protected $ArticleRepository;
    //
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function index(Request $request)
    {
     //
         $article = article::orderBy(
               'id' 
         /*  , 'code_article' */
           , 'type_produit'
           , 'nom_article'
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

             
        return view('vendor.adminlte.article.index',compact('article'))->with('i', ($request->input('page', 1) - 1) * 5);


         }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('articleCRUD.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {

	 $this->validate($request, [


           
           /* 'code_article'  => 'required'*/
            'type_produit' => 'required'
           , 'nom_article' => 'required'
           , 'marque_fabrication'  => 'required'
           , 'format_emballage'  => 'required'
           , 'date_fabrication' => 'required'
           , 'date_limite_consom' => 'required'
           , 'quantite_globale' => 'required'
           , 'date_envoi_echantillon' => 'required'
           , 'destination' => 'required'
           , 'resultat_analyse' => 'required'
           , 'poids_brut' => 'required'
           , 'poids_net' => 'required'
            
        ]);
        

        $article = article::create($request->all());
        $article->demandes()->sync($request->get('demandes'));
        return redirect()->route('article.index' )
                        ->with('success','article created successfully');

          

                        
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
         $article = article::find($id);
         
        return view('article.show',compact('article'));
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
          $article = article::find($id);
        return view('article.edit',compact('article'));
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
            
             /*'code_article'  => 'required'*/
            'type_produit' => 'required'
           , 'nom_article' => 'required'
           , 'marque_fabrication'  => 'required'
           , 'format_emballage'  => 'required'
           , 'date_fabrication' => 'required'
           , 'date_limite_consom' => 'required'
           , 'quantite_globale' => 'required'
           , 'date_envoi_echantillon' => 'required'
           , 'destination' => 'required'
           , 'resultat_analyse' => 'required'
           , 'poids_brut' => 'required'
           , 'poids_net' => 'required'
            
        ]);

        $article = article::findOrFail($id);
        $article->update($request->all());
        $article->prelevements()->sync($request->get('prelevements'));

        return redirect()->route('article.index')
                        ->with('success','article updated successfully');
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
         article::find($id)->delete();
        return redirect()->route('article.index')
                        ->with('success','article deleted successfully');
    }
}
