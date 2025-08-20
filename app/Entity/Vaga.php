<?php

 namespace App\Entity;

 use App\Db\DataBase;
 use \PDO;
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

    /**
     * RESPONSAVEL POR OBTER AS VAGAS DO BANCO
     * @param mixed $where
     * @param mixed $order
     * @param mixed $limit
     * @return array
     */
    public static function getVagas($where = null, $order = null, $limit = null){
         
        return (new DataBase('vagas'))->select($where,$order,$limit)
                                             ->fetchAll(PDO::FETCH_CLASS,self::class);
    }
    }

