<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Curso;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function listar()
    {
		return view('listar', ['alunos' => Aluno::all()]);
    }
    
    public function criar()
    {
        return view('criar', ['cursos' => Curso::all()]);
    }
    
    public function editar($id)
    {
        return view('editar',['aluno' => Aluno::findOrFail($id), 'cursos' => Curso::all()]);
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
        $aluno->curso_id = $request->curso_id;
        $aluno->save();
        return redirect('aluno/listar');
    }
}
