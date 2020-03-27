<?php

namespace App\Http\Controllers;

class IndexController extends Controller{

    public function homepage(){
        $title = "Sistema Integrado de Serviços - SISNORTE";

        return view('index', [
            'titulo' => $title
        ]);
    }

    

   public function Index(){
      return view('index');
   }

}








?>