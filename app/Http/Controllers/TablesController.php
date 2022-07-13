<?php

namespace App\Http\Controllers;

use App\Tables;
use Illuminate\Http\Request;

class TablesController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table= Tables::All();

        return view('Table/listTable')->with('table', $table);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Table/TableCreationForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $param= $request->except('_token');

        $table= new Tables();

        $table->nom= $param['nom'];
        $table->couvert= $param['couvert'];

        $table->save();
        
        return view('Table/TableCreationForm');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tables  $tables
     * @return \Illuminate\Http\Response
     */
    public function show(Tables $tables)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tables  $tables
     * @return \Illuminate\Http\Response
     */
    public function edit(Tables $tables)
    {
        //
    }

    /**
     * Montre le formulaire de mise a jour de tables
     *  @param  \App\Tables  $tables
     */
    public function updateForm(Tables $tables){

        
        // $Table= Tables::find($tables);
        $Table= $tables;

        return view('Table/TableCreationForm')->with('Table',$Table);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tables  $tables
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tables $tables)
    {
        if($tables->update($request->all())){
            return view('index');
        }else{
            dd("echec de la mise à jour");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tables  $tables
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tables $tables)
    {
        if($tables->delete()){
            return view('index');
        }else{
            echo"Echec de l'operation de suppression";
        }
    }
}
