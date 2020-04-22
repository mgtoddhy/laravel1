<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(Request $request){

        $nome = 'Fulano de tal';
        $idade = 35;

        $lista = [
            'contrato',
            'confeccionar folha pgto',
            'calcular impostos',
            'processar ferias',
            'processar rescisao'
        ];

        $data = [
            'nome' => $nome,
            'idade' => $idade,
            'lista' => $lista
        ];
        return view('admin.config',$data);

    }

    public function info(){
        echo 'Configurações INFO 3';
    }

    public function permissoes(){
        echo 'Configurações PERMSISSOES 3';
    }
}
