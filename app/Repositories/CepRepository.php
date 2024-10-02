<?php

namespace App\Repositories;
use App\Helpers\LogHelper;
use App\Models\CepModel;
use Carbon\Carbon;

class CepRepository
{

    public $cepModel;

    public function __construct(
        CepModel $cepModel,
        )
    {
        $this->cepModel = $cepModel;
    }



    public function buscarCep($codigo){
   
    try {

        $buscar = $this->cepModel->where('codigo', $codigo)->first();

        return $buscar;

    } catch (\Illuminate\Database\QueryException $e) {

        LogHelper::log('error', json_encode([
            'titulo'    => 'Houve um erro ao tentar buscar os dados!',
            'payload'   => 'Classe: CepRepository - Método: buscarCep',
            'descricao' => $e->getMessage(),
        ]));

        return "Erro, verifique o log.";

    }
           
        
    }

    

    public function salvarCep($dados){
   
        try {

            
        
        $data = [
            'codigo' => $dados->cep,
            'logradouro' => $dados->logradouro,
            'complemento' => $dados->complemento,
            'bairro' => $dados->bairro,
            'localidade' => $dados->localidade,
            'uf' => $dados->uf,
            'estado' => $dados->estado,
            'regiao' => $dados->regiao,
            'ibge' => $dados->ibge,
            'ddd' => $dados->ddd
        ];

            $this->cepModel->insert($data);
            return true;

    
            return $buscar;
    
        } catch (\Illuminate\Database\QueryException $e) {
    
            LogHelper::log('error', json_encode([
                'titulo'    => 'Houve um erro ao tentar salvar os dados!',
                'payload'   => 'Classe: CepRepository - Método: salvarCep',
                'descricao' => $e->getMessage(),
            ]));
    
            return false;
    
        }
               
            
        }


    



}