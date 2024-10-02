<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Services\ConsultarCep;
use Illuminate\Http\Request;


class BuscarCepController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $consultarCep;

    public function __construct(ConsultarCep $consultarCep)
    {
        $this->consultarCep = $consultarCep;
    }

    
    public function consultarCepPorCodigo(Request $request){
        
        return $this->consultarCep->consultarCep($request);
       
    }




}
