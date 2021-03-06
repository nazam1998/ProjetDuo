<?php

  

namespace  App\Http\Controllers;
use Illuminate\Http\Request;
use App\Categorie;
class  CategorieController  extends  Controller

    {

    /**

    * Display a listing of the resource.

    *

    * @return \Illuminate\Http\Response

    */

    public  function index()

    {

    //
        $categories= Categorie::all();
        return  view ("admin/categorie/index", compact("categories"));
    }

    

    /**

    * Show the form for creating a new resource.

    *

    * @return \Illuminate\Http\Response

    */

    public  function  create()

    {

        return  view("admin/categorie/add");

    //

    }

    

    /**

    * Store a newly created resource in storage.

    *

    * @param \Illuminate\Http\Request $request

    * @return \Illuminate\Http\Response

    */

    public  function  store(Request  $request)

    {
        $request->validate([
            'categorie'=>'required|unique:categories'
        ]);

        $categorie = new Categorie();
        $categorie->categorie=$request->input("categorie");
        $categorie->save();
        return  redirect()->route("categorie");

    }

    /**

    * Display the specified resource.

    *

    * @param  int $id

    * @return \Illuminate\Http\Response

    */

    public  function  show($id)

    {

    //

    }

    /**

    * Show the form for editing the specified resource.

    *

    * @param  int $id

    * @return \Illuminate\Http\Response

    */

    public  function  edit($id)

    {

    //

    $categorie=Categorie::find($id);

        return  view('admin/categorie/edit', compact('categorie'));
    }


    /**

    * Update the specified resource in storage.

    *

    * @param \Illuminate\Http\Request $request

    * @param  int $id

    * @return \Illuminate\Http\Response

    */

    public  function  update(Request  $request, $id)

    {

    //
    $request->validate([
        'categorie'=>'required|unique:categories,categorie,'.$id
    ]);
        $categorie = Categorie::find($id);
        $categorie->categorie=$request->input("categorie");
        $categorie->save();
        return  redirect()->route("categorie");

    }


    /**

    * Remove the specified resource from storage.

    *

    * @param  int $id

    * @return \Illuminate\Http\Response

    */

    public  function  destroy($id)

    {

        $categorie=Categorie::find($id);
        $categorie->delete();
        return  redirect()-> route("categorie");
    //
    }

    }
