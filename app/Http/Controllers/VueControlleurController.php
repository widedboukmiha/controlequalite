<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\controlleur;


class VueControlleurController extends Controller
{


    public function manageVue()
    {
        return view('manage-vue');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $controlleurs = Controlleur::latest()->paginate(5);

        $response = [
            'pagination' => [
                'total' => $controlleurs->total(),
                'per_page' => $controlleurs->perPage(),
                'current_page' => $controlleurs->currentPage(),
                'last_page' => $controlleurs->lastPage(),
                'from' => $controlleurs->firstItem(),
                'to' => $controlleurs->lastItem()
            ],
            'data' => $controlleurs
        ];

        return response()->json($response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
        ]);

        $create = Controlleur::create($request->all());

        return response()->json($create);
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
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
        ]);

        $edit = Controlleur::find($id)->update($request->all());

        return response()->json($edit);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Controlleur::find($id)->delete();
        return response()->json(['done']);
    }
}