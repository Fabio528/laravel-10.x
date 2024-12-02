<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
public function index()
{
$usuarios = Usuario::all();
    return view('usuarios.index', compact('usuarios'));
}

public function cadastro($id=null)
{

    $resultado = null;

    if($id){
        $resultado= Usuario::find($id);
    }


    return view('usuarios.cadastro',compact('resultado'));
}

public function salvar(Request $request)
{
    
    if($request->id){
        $u= Usuario::find($request->id);
    }else{
        $u = new Usuario;
    }
        $u->nome = $request->nome;
        $u->email = $request->email;
        $u->senha = bcrypt($request->senha);
        $u->save();

     return redirect('/usuarios');
    }

public function remover($id)
{
    $u= Usuario::find($id);
    $u->delete();
    
    
    return redirect()->back();
}

}