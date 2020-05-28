<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicito;
use App\User;
use App\Funcionario;
use App\Empresa;



class SolicitoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
   /* public function index(Request $request)
    {
      //  dd($request);
        $query = Solicito::query();
        $busca = $request->get('busca');

        if ($busca) {
            $query = $query->where('aceito','tipo', 'LIKE','%'. $busca .'%');
        }
        $solicitos = $query->paginate(10);
        return view('solicito.index', compact('solicitos','busca')); 
    }*/

 
 
       public function index()
    {
        $users = User::all();
       #  $solicitos = Solicito::All();
     //  $solicitos = Solicito::where('aceito', false)->get();

        $solicitos = Solicito::orderBy('created_at','DESC')
        ->where('aceito', false)        
        ->paginate(10);
      //  $solicitos = Solicito::paginate(10);
        return view('solicito.index', compact('solicitos', 'users'));
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
        
      /*  $regras = [
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
        $request->validate($regras, $mensagens);*/

       // var_dump($request);

       $validacao = $request->validate([
        'tipo'        => 'required | ',
        'estado'      => 'required |',
        'municipio'   => 'required | ',
        'bairro'      => 'required | min:3 | max:25',
        'rua'         => 'required | min:2 | max:25',
        'numero'      => 'required | max:6',
        'complemento' =>'nullable | min:3 | max:254',
    ]);

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
        $solicito->data = now()->format('Y-m-d H:i:s');

        $solicito->save();

        flash('Sua solicitação de serviço foi recebida com Sucesso! Aguarde contato <i class="fa fa-whatsapp" aria-hidden="true"></i>')->success()->important();

        
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $funcionarios = Funcionario::all();
        $empresas = Empresa::all();

        if(!$solicito = Solicito::find($id))

        return redirect()->back();

          //  return view('solicito.show', ['solicito' => $solicito]);
          return view('solicito.show', compact('solicito','funcionarios','empresas'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $funcionarios = Funcionario::all();
        $empresas = Empresa::all();

        if(!$solicito = Solicito::find($id))

        return redirect()->back();
        return view('solicito.edit', compact('solicito','funcionarios','empresas'));
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
        $validacao = $request->validate([
            'tipo'        => 'required | min:5 | max:40',
            'estado'      => 'required | min:4 | max:25',
            'municipio'   => 'required | min:5 | max:25',
            'bairro'      => 'required | min:3 | max:25',
            'rua'         => 'required | min:2 | max:25',
            'numero'      => 'required | max:6',
            'complemento' =>'nullable | min:3 | max:254',
        ]);

        $solicito->empresa_id = $request->empresa_id;
        $solicito->tipo = $request->tipo;
        $solicito->estado = $request->estado;
        $solicito->municipio = $request->municipio;
        $solicito->bairro = $request->bairro;
        $solicito->rua = $request->rua;
        $solicito->numero = $request->numero;
        $solicito->complemento = $request->complemento;
        $solicito->funcionario_id = $request->funcionario_id;
        $solicito->data_criacao = $request->data_criacao;
        $solicito->data_execucao = $request->data_execucao;
        $solicito->descricao = $request->descricao;
     //   dd($request->all());
        $solicito->save();

        flash('Mais um registro foi atualizado com Sucesso! <i class="fa fa-pencil" aria-hidden="true"></i>')->warning()->important();

        return redirect()->route('pedidosAceitos');
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

        flash('Um registro foi eliminado com Sucesso! <i class="fa fa-trash-o" aria-hidden="true"></i>')->error()->important();

            return redirect()->route('solicito.index');
    }

    public function search(Request $request)
    {

        $a = Solicito::where('tipo','LIKE','%'.$request->busca.'%')->get();
        return view('solicito.index',['solicitos'=>$a, 'busca'=>$request->busca]);
    }

    public function aceito($id)
    {
      //  $solicitos = Solicito::paginate(10);
        $solicito = Solicito::find($id);
        $solicito->aceito = true;
        $solicito->save();
        flash('Solicitação de serviço CONFIRMADA com Sucesso! Para mais detalhes, atualize os dados do serviço. <i class="fa fa-whatsapp" aria-hidden="true"></i>')->success()->important();
        return redirect()->route('pedidosAceitos');

    }

    public function cancela($id)
    {
      //  $solicitos = Solicito::paginate(10);
        $solicito = Solicito::find($id);
        $solicito->aceito = false;
        $solicito->save();

        return redirect()->route('solicito.index');

    }

    public function confirmado()
    {
        $users = User::all();
       //  $solicitos = Solicito::All();
      // $solicitos = Solicito::paginate(10);
        //$solicitos = Solicito::where('aceito', true)->get();
        $solicitos = Solicito::orderBy('updated_at','DESC')
        ->where('aceito', true)
        ->paginate(10);


        return view('solicito.aceito', array('solicitos' => $solicitos, 'users' => $users));
    }

}
