<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagamento;

class PagamentoController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$pagamentos = Pagamento::all();
    	
    	return view('pagamentos.pagamento', compact('pagamentos')); 
        
    }
    
}
