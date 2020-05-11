<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Solicito;
use App\Empresa;
use App\Funcionario;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::paginate(10);

        return view('service.index', array('services' => $services, 'busca'=>null));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $solicitos = Solicito::all();
        $empresas = Empresa::all();
        $funcionarios = Funcionario::all();
        return view('service.create', compact('solicitos','empresas','funcionarios'));
     //           return view('service.create', compact('empresas'));


      //  return view('service.create');
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
            'solicito_id'        => 'required',
            'empresa_id'      => 'required',
            'funcionario_id'   => 'required',
            'data_criacao'      => 'required',
            'data_execucao'         => 'required',
            'descricao' =>'nullable | min:3 | max:254',
        ]);

        $service = new Service;
        $service->solicito_id = $request->solicito_id;
        $service->empresa_id = $request->empresa_id;
        $service->funcionario_id = $request->funcionario_id;
        $service->data_criacao = $request->data_criacao;
        $service->data_execucao = $request->data_execucao;
        $service->descricao = $request->descricao;
        $service->save();

        flash('Um novo registro foi criado com Sucesso! <i class="fa fa-check" aria-hidden="true"></i>')->success()->important();

        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$service = Service::find($id))

            return redirect()->back();

                return view('service.show', [
                            'service' => $service
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
        $solicitos = Solicito::all();
        $empresas = Empresa::all();
        $funcionarios = Funcionario::all();
        if(!$service = Service::find($id))

            return redirect()->back();
            return view('service.edit', compact('service','solicitos','empresas','funcionarios'));

          //  return view('service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( $id,Request $request)
    {

        $validacao = $request->validate([
            'solicito_id'        => 'required',
            'empresa_id'      => 'required',
            'funcionario_id'   => 'required',
            'data_criacao'      => 'required',
            'data_execucao'         => 'required',
            'descricao' =>'nullable | min:3 | max:254',
        ]);

        $service = Service::find($id);
        $service->solicito_id = $request->solicito_id;
        $service->empresa_id = $request->empresa_id;
        $service->funcionario_id = $request->funcionario_id;
        $service->data_criacao = $request->data_criacao;
        $service->data_execucao = $request->data_execucao;
        $service->descricao = $request->descricao;
        $service->save();
        return redirect()->route('service.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$service = Service::find($id))

        return redirect()->back();

                   
        $service->delete();

        flash('Um registro foi eliminado com Sucesso! <i class="fa fa-trash-o" aria-hidden="true"></i>')->error()->important();

            return redirect()->route('service.index');
    }
}
