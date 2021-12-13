<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
  
    public function index()
    {
        $articulo = Articulo::all();
        $data =['articulos'=>$articulo];
        return view('articulo.index',$data);
    }

 
    public function create()
    {
        return view('articulo.create');
    }

  
    public function store(Request $request)
    {
        $articulo = new Articulo();
        $articulo->codigo = $request->codigo;
        $articulo->descripcion = $request->descripcion;
        $articulo->cantidad = $request->cantidad;
        $articulo->precio = $request->precio;
        $articulo->save();
        return redirect('/articulos');
    }


    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        $articulo = Articulo::find($id);
        $data =['articulo'=>$articulo];
        return view('articulo.edit',$data);
    }


    public function update(Request $request, $id)
    {
        $articulo = Articulo::find($id);
        $articulo->codigo = $request->codigo;
        $articulo->descripcion = $request->descripcion;
        $articulo->cantidad = $request->cantidad;
        $articulo->precio = $request->precio;
        $articulo->save();
        return redirect('/articulos');
    }

 
    public function destroy($id)
    {
        $articulo = Articulo::find($id);
        $articulo->delete();
        return redirect('/articulos');
    }
}
