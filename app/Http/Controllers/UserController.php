<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
 
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = User::All();
        $users = User::paginate(5);

        return view('user.index', array('users' => $users, 'busca'=>null));
  
    }

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
            'name'     => 'required | min:2 | max:50 | alpha',
            'telefone' => 'required | numeric | regex:/(0)[0-9]{11}/',
            'email'    => 'required | email | unique:users',
            'password' => 'required | min:8 | confirmed'
        ];
        $mensagens = [
            'name.required' => 'Digite seu nome!',
            'name.min'      => 'O campo nome deve conter no mínimo 2 caracteres!',
            'name.max'      => 'O campo nome deve conter no máximo 50 caracteres!',
            'name.alpha'    => 'O campo nome deve conter apenas letras!',
            'telefone.required' => 'Digite seu número de telefone!',
            'telefone.numeric'  => 'O campo telefone deve  conter apenas números!',
            'telefone.regex'    => 'Digite um número de telefone Válido! EX: 096988110099',
            'email.required'    => 'Digite seu endereço de e-mail',
            'email.email'       => 'Digite um e-mail Válido!',
            'email.unique'      => 'E-mail já registrado! Digite Outro E-mail ou vá em Recuperar Senha.',
            'password.required' => 'Digite sua senha!',
            'password.min'      => 'Digite no mínimo 8 caracteres!',
            'password.confirmed' => 'Por favor, digite novamente e confirme sua senha!'
        ];
        $request->validate($regras, $mensagens);


        $users = new User;
        $users->name = $request->input('name');
        $users->telefone = $request->telefone;
        $users->email = $request->email;

//        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->save();
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
        if(!$user = User::find($id))

        return redirect()->back();
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->telefone = $request->telefone;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
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
            return redirect()->route('user.index');
    }
}
