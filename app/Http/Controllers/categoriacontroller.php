<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorias; //Invocamos a nuestro modelo

class categoriacontroller extends Controller
{
    //Get
    public function getCategoria(){
        return response()->json(categorias::all(),200);
    }

    //GetId
    public function getCategoriaxid($id){
        $categoria = categorias::find($id);

        if(is_null($categoria)){
            return response()->json(['Mensaje'=>'Registro no encontrado'],404);
        }
        return response()->json($categoria::find($id),200);
    }

    //Post
    public function insertCategoria(Request $request){
        $categoria = categorias::create($request->all());
        return response($categoria, 200);
    }

    //Put
    public function updateCategoria(Request $request, $id){
        $categoria = categorias::find($id);

        if(is_null($categoria)){
            return response()->json(['Mensaje'=>'Registro no encontrado'],404);
        }

        $categoria->update($request->all());
        return response($categoria,200);
    }

    //TODO: Delete
    public function deleteCategoria($id){
        $categoria = categorias::find($id);

        if(is_null($categoria)){
            return response()->json(['Mensaje'=>'Registro no encontrado'],404);
        }

        $categoria->delete();
        return response()->json(['Mensaje'=>'Registro Eliminado'],200);
    }
}
