<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entreprise;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $entreprises = Entreprise::all();
        if($request->ajax()) {
            return $entreprises;
        } else {
            return view('entreprises.liste', ['entreprises' => $entreprises]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entreprises.formAjout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entreprise       = new entreprise();
        $entreprise->name = $request->name;
        $entreprise->save();

        if($request->ajax()) {
            return $entreprise;
        } else {
            return view('entreprises.liste', ['entreprises' => Entreprise::all()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('entreprises.show', ['entreprise' => Entreprise::find($id)->toArray()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entreprise = Entreprise::find($id);
        return view('entreprises.formEdit', ['entreprise' => $entreprise]);
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
        $entreprise       = Entreprise::find($id);
        $entreprise->name = $request->name;
        $entreprise->save();
        return view('entreprises.liste', ['entreprises' => Entreprise::all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $entreprise = Entreprise::find($id);
        $entreprise->delete();
        if($request->ajax()) {
            return $entreprise;
        } else {
            return view('entreprises.delete', ['entreprises' => Entreprise::all()]);
        }
    }
}
