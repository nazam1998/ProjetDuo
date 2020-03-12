<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use App\Entreprise;
use Illuminate\Http\Request;
class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entreprises=Entreprise::all();
        return view('admin.entreprise.index',\compact('entreprises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.entreprise.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entreprise=new Entreprise();
        $filename=Storage::disk('public')->put('',$request->file('logo'));
        $image=basename($filename);
        $entreprise->nom=$request->nom;
        $entreprise->employe=$request->employe;
        $entreprise->logo=$image;
        $entreprise->save();
        return redirect()->route('entreprise');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entreprise=Entreprise::find($id);
        return view('admin.entreprise.edit',\compact('entreprise'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $entreprise=Entreprise::find($id);
        $filename=Storage::disk('public')->put('',$request->file('logo'));
        $image=basename($filename);
        $entreprise->nom=$request->nom;
        $entreprise->employe=$request->employe;
        $entreprise->logo=$image;
        $entreprise->save();
        return redirect()->route('entreprise');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entreprise=Entreprise::find($id);
        $entreprise->delete();
        return redirect()->route('entreprise'); 
    }
}
