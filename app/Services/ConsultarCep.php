<?php

namespace App\Services;

use App\Helpers\ResponseHelper;
use App\Repositories\CepRepository;
use App\Services\External\ViaCepApiService;
use App\Jobs\ProcessarListaCsvJob;

class ConsultarCep
{
    protected $cepRepository;

    public function __construct(
        CepRepository $cepRepository,
        )
    {
        $this->cepRepository = $cepRepository;
    }






    public function consultarCep($request)
    {
        if($request->cep == null)
           return ResponseHelper::getResponseSucesso("Por favor, envie todos os campos obrigátorios.");


        




            $busca = $this->cepRepository->buscarCep($request->cep);
       
        if($busca == null){

            $viaCepApiService = new ViaCepApiService;
            $viaCep = $viaCepApiService->consultarCep($request->cep);
            $this->cepRepository->salvarCep($viaCep);
           
            $data = [
                'cep' => $viaCep->cep,
                'logradouro' => $viaCep->logradouro,
                'complemento' => $viaCep->complemento,
                'bairro' => $viaCep->bairro,
                'localidade' => $viaCep->localidade,
                'uf' => $viaCep->uf,
                'estado' => $viaCep->estado,
                'regiao' => $viaCep->regiao,
                'ibge' => $viaCep->ibge,
                'ddd' => $viaCep->ddd
            ];

        }else{
          
            $data = [
                'cep' => $busca->codigo,
                'logradouro' => $busca->logradouro,
                'complemento' => $busca->complemento,
                'bairro' => $busca->bairro,
                'localidade' => $busca->localidade,
                'uf' => $busca->uf,
                'estado' => $busca->estado,
                'regiao' => $busca->regiao,
                'ibge' => $busca->ibge,
                'ddd' => $busca->ddd
            ];
        }
           

	
        return ResponseHelper::getResponseSucesso($data);

	}


	

  
    
}
