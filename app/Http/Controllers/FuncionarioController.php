<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionario::All();
        return view('funcionario.index', array('funcionarios' => $funcionarios, 'busca'=>null));
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('funcionario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $funcionario = new Funcionario;
        $funcionario->nome = $request->nome;
        $funcionario->rg = $request->rg;
        $funcionario->cpf = $request->cpf;
        $funcionario->profissao = $request->profissao;
        $funcionario->telefone = $request->telefone;
        $funcionario->observacao = $request->observacao;
        $funcionario->save();
        return redirect()->route('funcionario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$funcionario = Funcionario::find($id))

        return redirect()->back();

            return view('funcionario.show', [
                        'funcionario' => $funcionario
                    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$funcionario = Funcionario::find($id))

            return redirect()->back();
            return view('funcionario.edit', compact('funcionario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Funcionario $funcionario)
    {
        $funcionario->nome = $request->nome;
        $funcionario->rg = $request->rg;
        $funcionario->cpf = $request->cpf;
        $funcionario->profissao = $request->profissao;
        $funcionario->telefone = $request->telefone;
        $funcionario->observacao = $request->observacao;
        $funcionario->save();
        return redirect()->route('funcionario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$funcionario = Funcionario::find($id))

        return redirect()->back();

                   
        $funcionario->delete();
            return redirect()->route('funcionario.index');
    }
}
