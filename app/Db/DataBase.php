<?php

  namespace App\Db;

  use \PDO;
  use PDOException;

  class DataBase{
    /**
     * CONEXAO  COM O BANCO DE DADOS
     * @var string
     */
    const HOST = 'localhost';

    /**
     * NOME DO BANCO DE DADOS
     * @var string
     */
    const NAME = 'wdev_vagas';


    /**
     * USUARIO DO BANCO
     * @var string
     */
    const USER = 'root';


    /**
     * SENHA DO BANCO DE DADOS
     * @var string
     */
    const PASS = '123';

   /**
    * NOME DA TABELA
    * @var 
    */
   private $table;

   /**
    * PRIVATE CONNECTION
    * @var PDO
    */
   private $connection;

   public function __construct($table = null){
    $this->table = $table;
    $this->setConnection();
   }

   private function setConnection(){
    try{
        $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        die('ERROR:' .$e->getMessage());
   }
}

    
    /**
     * METODO RESPONSAVEL POR EXECUTAR QUERIES NO BD
     * @param string
     * @param array $params
     * @return PDOStatement
     */
    public function execute($query,$params = []){
          try{
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
          }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
          }
    }

     /**
      * INSERIR DADOS NO BANCO DE DADOS
      * @param array $values
      * @return integer
      */
     public function insert($values){
        //DADOS DA QUERY
        $fields = array_keys($values);
        $binds = array_pad([],count($fields),'?');
        
      //MONTA A QUERY
        $query = 'INSERT INTO '.$this->table. ' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';
         
      //EXECUTA O INSERT
        $this->execute($query,array_values($values));

      //RETORNA O ID
        return $this->connection->lastInsertId();
     }

     /**
      * METODO RESPONSAVEL POR EXECUTAR UMA CONSULTA NO BANCO DE DADOS
      * @param string $where
      * @param string $order
      * @param string $limit
      * @return PDOStatement
      */
     public function select($where = null,$order = null,$limit = null,$fields = '*'){
       //DADOS DA QUERY

       $where = strlen($where) ? ' WHERE '.$where : '';
       $order = strlen($order) ? ' ORDER BY '.$order : '';
       $limit = strlen($limit) ? ' LIMIT '.$limit : '';
      
       //MONTA A QUERY
      $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$order. ' '.$limit;
      
      //EXECUTA A QUERY
       return $this->execute($query);
      
     }
    
     /**
      * METODO DE ATUALIZACOE DO DB
      * @param string $where
      * @param array $values [field => value]
      * @return boolean
      */
     public function update($where,$values){
      
      //DADOS DA QUERY
      $fields = array_keys($values);

      //MONTA A QUERY
      $query =' UPDATE '.$this->table.' SET '.implode('=?,',$fields).'=?  WHERE '.$where;
      
      //EXECUTA A QUERY
      $this->execute($query,array_values($values));
      return true;

    }
 
    /**
     * DELETA DADOS DO BANCO
     * @param string where
     * return boolean
     */
    public function delete($where){
       $query = ' DELETE FROM '.$this->table.' WHERE '.$where;

       //EXECUTA A QUERY

       $this->execute($query);
       return true;
    }
    }
