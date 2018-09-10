<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function listar()
    {
        return Aluno::all();
    }
    
    public function criar()
    {
        return new Aluno();
    }
    
    public function editar($id)
    {
        $aluno = Aluno::findOrFail($id);

//        if (!$aluno) {
//            abort(404, "Aluno não encontrado");
//        }
        
        return $aluno;
    }
    
    public function remover($id)
    {
        $aluno = Aluno::find($id);
        $aluno->delete();
        return redirect('aluno/listar');
    }
    
    public function salvar(Request $request)
    {
        $aluno = new Aluno();
        
        if ($request->has('id')) {
            $aluno = Aluno::find($request->id);
        }
        
        $aluno->matricula = $request->matricula;
        $aluno->nome = $request->nome;
        $aluno->save();
        return redirect('aluno/listar');
    }
}
