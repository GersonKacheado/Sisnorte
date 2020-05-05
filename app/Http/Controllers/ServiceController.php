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
        $service = new Service;
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
        if(!$service = Service::find($id))

            return redirect()->back();
            return view('service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Service $service)
    {
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
            return redirect()->route('service.index');
    }
}
