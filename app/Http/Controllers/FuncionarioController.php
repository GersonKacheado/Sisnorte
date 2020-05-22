<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use App\Http\Controller\Exception;

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
     //  $funcionarios = Funcionario::paginate(10);
   //  flash('Um novo registro de colaborador foi criadookook222 com Sucesso! <i class="fa fa-user" aria-hidden="true"></i>')->error()->important();

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

        $validacao = $request->validate([
            'nome'        => 'required | min:2 | max:25',
            'rg'      => 'required | numeric |',
            'cpf'   => 'required | regex:/^\d{3}\.\d{3}\.\d{3}\-\d{2}$/',
            'profissao'      => 'required | min:3 | max:25',
            'telefone'         => 'required | numeric |',
            'observacao' =>'nullable | min:3 | max:254',
        ]);

        $funcionario = new Funcionario;
        $funcionario->nome = $request->nome;
        $funcionario->rg = $request->rg;
        $funcionario->cpf = $request->cpf;
        $funcionario->profissao = $request->profissao;
        $funcionario->telefone = $request->telefone;
        $funcionario->observacao = $request->observacao;
        $funcionario->save();

        flash('Um novo registro de colaborador foi criado com Sucesso! <i class="fa fa-user" aria-hidden="true"></i>')->success()->important();

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
        $validacao = $request->validate([
            'nome'        => 'required | min:2 | max:25',
            'rg'      => 'required | numeric |',
            'cpf'   => 'required | regex:/^\d{3}\.\d{3}\.\d{3}\-\d{2}$/',
            'profissao'      => 'required | min:3 | max:25',
            'telefone'         => 'required | numeric |',
            'observacao' =>'nullable | min:3 | max:254',
        ]);

        $funcionario->nome = $request->nome;
        $funcionario->rg = $request->rg;
        $funcionario->cpf = $request->cpf;
        $funcionario->profissao = $request->profissao;
        $funcionario->telefone = $request->telefone;
        $funcionario->observacao = $request->observacao;
        $funcionario->save();
        flash('Mais um registro foi atualizado com Sucesso! <i class="fa fa-pencil" aria-hidden="true"></i>')->warning()->important();

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

        flash('Um registro foi eliminado com Sucesso! <i class="fa fa-trash-o" aria-hidden="true"></i>')->error()->important();

            return redirect()->route('funcionario.index');
    }

    public function search(Request $request)
    {

        $a = Funcionario::where('profissao','LIKE','%'.$request->busca.'%')->get();
        return view('funcionario.index',['funcionarios'=>$a, 'busca'=>$request->busca]);
    }

    public function getCpfAttribute()
    {
        $cpf = $this->attributes['cpf'];
        return substr($cpf, 0,3);
    }
}
