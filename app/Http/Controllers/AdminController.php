<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth:admin');
    }
    public function index() {
        flash('Seja bem vindo ao Painel de Controle! Faça aqui o gerenciameto de recursos do sistema. <i class="fa fa-cog" aria-hidden="true"></i>')->success()->important();

        return view('admin');
    }

    
}
