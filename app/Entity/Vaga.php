<?php

 namespace App\Entity;

 use App\Db\DataBase;

 class Vaga{

    /**
     * IDENTIFICADOR DA VAGA
     * @var integer
     */
    public $id;
    
    /**
     * TITULO DA VAGA
     * @var string
     */
    public $titulo;

    /**
     * DESCRICAO DA VAGA
     * @var string
     */
    public $descricao;

    /**
     * DEFINE A VAGA ATIVA
     * @var string(s/n)
     */
    public $ativo;

    /**
     * DATA PUBLICACAO DA VAGA
     * @var string
     */
    public $data;

    /**
     * CADASTRAR UMA VAGA 
     * @return boolean
     */
   
    public function cadastrar(){

        $this->data = date('Y-m-d H-i-s');

        $obDataBase = new DataBase('vagas');
        $this->id = $obDataBase->insert([
            'titulo' => $this->titulo,
            'descricao' => $this->descricao,
            'ativo' => $this->ativo,
            'data' => $this->data

            
        ]);
       return true;
    }
    }

