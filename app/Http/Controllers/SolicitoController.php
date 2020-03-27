<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicito;


class SolicitoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitos = Solicito::All();
        return view('solicito.index', array('solicitos' => $solicitos, 'busca'=>null));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('solicito.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $solicito = new Solicito;
        $solicito->users_id = Auth()->id();
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
