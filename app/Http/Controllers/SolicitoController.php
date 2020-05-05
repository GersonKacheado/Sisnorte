<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicito;
use App\user;



class SolicitoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

       // $solicitos = Solicito::All();
       $solicitos = Solicito::paginate(10);

        return view('solicito.index', array('solicitos' => $solicitos, 'busca'=>null), compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('solicito.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $regras = [
            'tipo' => 'required |',
            'estado' => 'required |',
            'municipio' => 'required |',
            'bairro' => 'required | min:3',
            'rua' => 'required | min:2',
            'numero' => 'required | min:1',
            'complemento' => 'required |',
        ];
        $mensagens = [
            'tipo.required' => 'Escolha uma das Opções!',
            'estado.required' => 'Escolha esta Opção!',
            'municipio.required' => 'Escolha uma das Opções!',
            'bairro.required' => 'É necessario Preencher este campo!',
            'bairro.min' => 'Digite pelo 3 (três) caracteres!',
            'rua.required' => 'É necessario Preencher este campo!',
            'rua.min' => 'Digite pelo menos 2 (dois), caracteres!',
            'numero.required' => 'É necessario Preencher este campo!',
            'numero.min' => 'Digite pelo menos 1 (um) número!',
            'complemento.required' => 'É necessario Preencher este campo!'

        ];
        $request->validate($regras, $mensagens);

       // var_dump($request);

       // dd(auth()->user());
        $solicito = new Solicito;
        $solicito->users_id = auth()->id();
        $solicito->tipo = $request->tipo;
        $solicito->estado = $request->estado;
        $solicito->municipio = $request->municipio;
        $solicito->bairro = $request->bairro;
        $solicito->rua = $request->rua;
        $solicito->numero = $request->numero;
        $solicito->complemento = $request->complemento;

        $solicito->save();
        
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$solicito = Solicito::find($id))

        return redirect()->back();

            return view('solicito.show', [
                        'solicito' => $solicito
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
        if(!$solicito = Solicito::find($id))

        return redirect()->back();
        return view('solicito.edit', compact('solicito'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicito $solicito)
    {
        $solicito->tipo = $request->tipo;
        $solicito->estado = $request->estado;
        $solicito->municipio = $request->municipio;
        $solicito->bairro = $request->bairro;
        $solicito->rua = $request->rua;
        $solicito->numero = $request->numero;
        $solicito->complemento = $request->complemento;
        $solicito->save();
        return redirect()->route('solicito.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$solicito = Solicito::find($id))

        return redirect()->back();

                   
        $solicito->delete();
            return redirect()->route('solicito.index');
    }
}
