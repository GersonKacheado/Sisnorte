<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Empresa;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  $empresas = Empresa::All();
      $empresas = Empresa::paginate(10);

        return view('empresa.index', array('empresas' => $empresas, 'busca'=>null));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $regras = [
            'nomefantasia' => 'required | min:2 | string ',
            'razaosocial' => 'required |',
            'cnpj' => 'required |'
        ];
        $mensagens = [
            'nomefantasia.required' => 'O preenchimento deste campo é obrigatório!',
            'nomefantasia.min' => 'O campo nome deve conter no mínimo 2 caracteres!',
            'nomefantasia.string' => 'Por favor, Digite um nome Válido!',
            'razaosocial.required' => 'O preenchimento deste campo é obrigatório!',
            'cnpj.required' => 'O preenchimento deste campo é obrigatório!'
        ];
        $request->validate($regras, $mensagens);*/

        $validacao = $request->validate([
            'nomefantasia' => 'required | string | min:3 | max:30',
            'razaosocial'  => 'required | min:3 | max:25 | ',
            'cnpj'         => 'required | regex:/^\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}$/',
        ]);

        $empresa = new Empresa;
        $empresa->nomefantasia = $request->nomefantasia;
        $empresa->razaosocial = $request->razaosocial;
        $empresa->cnpj = $request->cnpj;
        $empresa->save();

        flash('Um novo registro foi criado com Sucesso! <i class="fa fa-check" aria-hidden="true"></i>')->success()->important();

        return redirect()->route('empresa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$empresa = Empresa::find($id))

            return redirect()->back();

                return view('empresa.show', [
                            'empresa' => $empresa
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
        if(!$empresa = Empresa::find($id))

            return redirect()->back();
            return view('empresa.edit', compact('empresa'));
                          
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {

      /*  $regras = [
            'nomefantasia' => 'required |',
            'razaosocial' => 'required |',
            'cnpj' => 'required |'
        ];
        $mensagens = [
            'nomefantasia.required' => 'O preenchimento deste campo é obrigatório!',
            'razaosocial.required' => 'O preenchimento deste campo é obrigatório!',
            'cnpj.required' => 'O preenchimento deste campo é obrigatório!'
        ];
        $request->validate($regras, $mensagens);*/
        $validacao = $request->validate([
            'nomefantasia' => 'required | string | min:3 | max:30',
            'razaosocial'  => 'required | min:3 | max:25 | ',
            'cnpj'         => 'required | regex:/^\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}$/',
        ]);

        $empresa->nomefantasia = $request->nomefantasia;
        $empresa->razaosocial = $request->razaosocial;
        $empresa->cnpj = $request->cnpj;
        $empresa->save();

        flash('Mais um registro foi atualizado com Sucesso! <i class="fa fa-pencil" aria-hidden="true"></i>')->warning()->important();

        return redirect()->route('empresa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$empresa = Empresa::find($id))

        return redirect()->back();

                   
        $empresa->delete();

        flash('Um registro foi eliminado com Sucesso! <i class="fa fa-trash-o" aria-hidden="true"></i>')->error()->important();

            return redirect()->route('empresa.index');
    }

    public function search(Request $request)
    {

        $a = Empresa::where('nomefantasia','LIKE','%'.$request->busca.'%')->get();
        return view('empresa.index',['empresas'=>$a, 'busca'=>$request->busca]);
    }
}
