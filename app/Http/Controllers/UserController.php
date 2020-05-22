<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Solicito;


class UserController extends Controller
{
    public $users;
    public $solicitos;

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $query = User::query();

        $busca = $request->get('busca');
        // usuario está tentando aplicar um filtro
        if ($busca) {
            $query = $query->where('name', 'LIKE','%'. $busca .'%');
        }

        $users = $query->paginate(10);

        return view('user.index', compact('users', 'busca'));
  
    }



   /* public function index()
    {
        $solicitos = Solicito::All();
        //$users = User::All();
        $users = User::paginate(10);

        return view('user.index', array('users' => $users, 'solicitos' => $solicitos));
  
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
            'name'     => 'required | string | min:2 | max:50  ',
            'telefone' => 'required | numeric | regex:/(0)[0-9]{11}/',
            'email'    => 'required | email | unique:users',
            'password' => 'required | string | min:8 | confirmed ',
            'password_confirmation' => 'required | ' 

        ];
        $mensagens = [
            'name.required' => 'Digite seu nome!',
            'name.min'      => 'O campo nome deve conter no mínimo 2 caracteres!',
            'name.max'      => 'O campo nome deve conter no máximo 50 caracteres!',
            'name.string' => 'Por favor, Digite um nome Válido!',
            'telefone.required' => 'Digite seu número de telefone!',
            'telefone.numeric'  => 'O campo telefone deve  conter apenas números!',
            'telefone.regex'    => 'Digite um número de telefone Válido! EX: 096988110099',
            'email.required'    => 'Digite seu endereço de e-mail',
            'email.email'       => 'Digite um e-mail Válido!',
            'email.unique'      => 'E-mail já registrado! Digite Outro E-mail ou vá em Recuperar Senha.',
            'password.required' => 'Digite sua senha!',
            'password.string' => 'Por favor! Digite um valor Válido',
            'password.min'      => 'Digite no mínimo 8 caracteres!',

            'password.confirmed' => 'As senhas não são iguais! Por favor, digite novamente e confirme!',
            'password_confirmation.required' => 'Confirmação Obrigatória!',

        ];
        $request->validate($regras, $mensagens);


        $users = new User;
        $users->name = $request->input('name');
        $users->telefone = $request->telefone;
        $users->email = $request->email;

//        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->save();

        flash('Um novo registro foi criado com Sucesso! <i class="fa fa-check" aria-hidden="true"></i>')->success()->important();


        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$user = User::find($id))

        return redirect()->back();

            return view('user.show', [
                        'user' => $user
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
        if(!$users = User::find($id))

        return redirect()->back();
        return view('user.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, User $users)
    {

        $regras = [
            'name'     => 'required | string | min:2 | max:50  ',
            'telefone' => 'required | numeric | regex:/(0)[0-9]{11}/',
            'email'    => 'required|email|unique:users,email,'. $id,
            'password' => 'required | string | min:8 | confirmed ',
            'password_confirmation' => 'required | '
        ];
        $mensagens = [
            'name.required' => 'Digite nome Válido!',
            'name.min'      => 'O campo nome deve conter no mínimo 2 caracteres!',
            'name.max'      => 'O campo nome deve conter no máximo 50 caracteres!',
            'name.string' => 'Por favor, Digite um nome Válido!',            
            'telefone.required' => 'Digite seu número de telefone!',
            'telefone.numeric'  => 'O campo telefone deve  conter apenas números!',
            'telefone.regex'    => 'Digite um número de telefone Válido! EX: 096988110099',
            'email.required'    => 'Digite seu endereço de e-mail',
            'email.email'       => 'Digite um e-mail Válido!',
            'email.unique'      => 'E-mail já registrado! Digite Outro E-mail ou vá em Recuperar Senha.',
            'password.required' => 'Digite sua senha e confirme!',
            'password.string' => 'Por favor! Digite um valor Válido',
            'password.min'      => 'Digite no mínimo 8 caracteres!',
            'password.confirmed' => 'As senhas não são iguais! Por favor, digite novamente e confirme!',
            'password_confirmation.required' => 'Confirmação Obrigatória!',
        ];
        $request->validate($regras, $mensagens);

        
      //  $users->name = $request->input('name');
        $users = User::find($id);
        $users->name = $request->name;
        $users->telefone = $request->telefone;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->save();

        flash('Mais um registro foi atualizado com Sucesso! <i class="fa fa-pencil" aria-hidden="true"></i>')->warning()->important();

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$user = User::find($id))

        return redirect()->back();

                   
        $user->delete();

        flash('Um registro foi eliminado com Sucesso! <i class="fa fa-trash-o" aria-hidden="true"></i>')->error()->important();


            return redirect()->route('user.index');
    }

    public function search(Request $request)
    {

        $a = User::where('name','LIKE','%'.$request->busca.'%')->get();
        return view('user.index',['users'=>$a, 'busca'=>$request->busca]);
    }

  //  public function userEdit()
    //{
    //    $user = User::find(Auth::id());
    //   return redirect()->back();

     //   return view('resources/user/user_Edit.blade.php', compact('users'));
    //}

    
//public function userEdit()
  //  {
    //    $user = User::find(Auth::id());

      //  return view('resources/user/user_Edit', ['user' => $user]);
   // }

    public function userEdit()
    {
        $user = User::find(\Auth::id());
        flash('Certo! você já pode atualizar seus dados. <i class="fa fa-pencil" aria-hidden="true"></i>')->warning()->important();
        flash('Atenção! para aprovação de suas informações, confirme sua senha. <i class="fa fa-key" aria-hidden="true"></i>')->error()->important();

        return view('user.user_Edit', ['user' => $user]);
    }

    public function userUpdate( Request $request, User $users)
    {

        $regras = [
            'name'     => 'required | string | min:2 | max:50  ',
            'telefone' => 'required | numeric | regex:/(0)[0-9]{11}/',
            'email'    => 'required|',
            'password' => 'required | string | min:8 | confirmed ',
            'password_confirmation' => 'required | '
        ];
        $mensagens = [
            'name.required' => 'Digite nome Válido!',
            'name.min'      => 'O campo nome deve conter no mínimo 2 caracteres!',
            'name.max'      => 'O campo nome deve conter no máximo 50 caracteres!',
            'name.string' => 'Por favor, Digite um nome Válido!',            
            'telefone.required' => 'Digite seu número de telefone!',
            'telefone.numeric'  => 'O campo telefone deve  conter apenas números!',
            'telefone.regex'    => 'Digite um número de telefone Válido! EX: 096988110099',
            'email.required'    => 'Digite seu endereço de e-mail',
            'email.email'       => 'Digite um e-mail Válido!',
            'password.required' => 'Digite sua senha e confirme!',
            'password.string' => 'Por favor! Digite um valor Válido',
            'password.min'      => 'Digite no mínimo 8 caracteres!',
            'password.confirmed' => 'As senhas não são iguais! Por favor, digite novamente e confirme!',
            'password_confirmation.required' => 'Confirmação Obrigatória!',
        ];
        $request->validate($regras, $mensagens);

        $user = User::find(\Auth::id());
        $user->name = $request->name;
        $user->telefone = $request->telefone;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        flash('Ok! Seus dados foram atualizados com Sucesso! <i class="fa fa-pencil" aria-hidden="true"></i>')->success()->important();

        return redirect()->route('home');

    }

   
}
