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
     * QUANTIDADE DE VAGAS
     * @var string
     */
    public $quantidade;

    /**
     * REMUNERAÇÃO VAGA
     * @var
     */
    public $remuneracao;

    /**
     * DATA DE ABERTURA
     * @var 
     */
    public $dataAbertura;

    /**
     * DATA DE FECHAMENTO
     * @var 
     */
    public $dataFechamento;

    /**
     * CADASTRAR UMA VAGA 
     * @return boolean
     */
   
    public function cadastrar(){

        $this->dataAbertura = date('Y-m-d H-i-s');
        $this->dataFechamento = date('Y-m-d H-i-s');

        $obDataBase = new DataBase('vagas');
        $this->id = $obDataBase->insert([
            'titulo' => $this->titulo,
            'descricao' => $this->descricao,
            'quantidade' => $this->quantidade,
            'remuneracao' => $this->remuneracao,
            'data_abertura' =>$this->dataAbertura,
            'data_fechamento' =>$this->dataFechamento


            
        ]);
       return true;
    }
    

    public function excluir(){
        return (new DataBase('vagas'))->delete('id = '.$this->id);
    }

    
    /**
     * METODO RESPONSAVEL POR ATUALIZAR DADO DO DB
     * @return boolean
     */
    public function atualizar(){
        return(new DataBase('vagas'))->update('id = '.$this->id,[
            'titulo' => $this->titulo,
            'descricao' => $this->descricao,
            'quantidade' => $this->quantidade,
            'remuneracao' => $this->remuneracao

        ]);

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

    /**
     * METODO RESPONSAVEL POR BUSCAR A VAGA NO BD
     * @param integer $id
     * @return Vaga
     */
    public static function getVaga($id){
          return(new DataBase('vagas'))->select('id= '.$id)
                                       ->fetchObject(self::class);
    }
    }



