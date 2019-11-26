<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bancosModel;

class bancosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    
    function __construct() {
       //$this->middleware('auth');
    }

    public function index()
    {
        $bancos = bancosModel::all();
        return view("bancos", compact("bancos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(bancosModel::where("nombre",$request->nombre)->where("codigo",$request->sucursal)->exists()){
            return redirect("bancos")->with("error","Ya existe la sucursal ".$request->sucursal." para el banco ".$request->nombre);
        }else{
        $bancos = new bancosModel();//creando objeto de tipo bancos
        //Campo de B.D  = Nombre del campo del formulario
        $bancos -> nombre = $request->nombre;
        $bancos -> telefono = $request->telefono;
        $bancos -> codigo = $request->sucursal;
        $bancos -> save();
        return redirect("bancos")->with("success","Banco almacenado correctamente");
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
        if(bancosModel::where("id",$id)->exists()){
         $bancos = bancosModel::select("*")->where("id",$id)->get();
        return view("editaBanco",compact("bancos"));
         }else{
            return redirect("bancos")->with("error","El banco no existe");
        }
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
        if(bancosModel::where("id",$id)->exists()){
            $bancos = bancosModel::find($id);        
            $bancos -> nombre = $request->nombre;
            $bancos -> telefono = $request->telefono;
            $bancos -> codigo = $request->sucursal;
            $bancos -> save();
            return redirect("bancos")->with("success","Banco actualizado correctamente");
        }else{
            return redirect("bancos")->with("error","El banco no existe");
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(bancosModel::where("id",$id)->exists()){
       $bancos = bancosModel::find($id);
       $bancos->delete();
       return redirect("bancos")->with("success","Banco eliminado correctamente");
       }else{
            return redirect("bancos")->with("error","El banco no existe");
        }
    }
}
