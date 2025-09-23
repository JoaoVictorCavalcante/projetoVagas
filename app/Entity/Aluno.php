<?php
  namespace App\Entity;
  use \App\Db\DataBase;

   class Aluno{
    public $id;

    public $nome;

    public $cpf;

    public $telefone;

    public $email_pessoal;

    public $email_institucional;

    public $curso;

    public $periodo;

    public $data;

    public $senha;


    public function cadastrar(){
        $this->data = date('Y-m-d',strtotime($this->data));

        $obDataBase = new DataBase('alunos');
        $this->id = $obDataBase->insert([
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'telefone' => $this->telefone,
            'email_pessoal' => $this->email_pessoal,
            'email_institucional' => $this->email_institucional,
            'curso' => $this->curso,
            'periodo' => $this->periodo,
            'data' => $this->data,
            'senha' => $this->senha
        ]);

        return true;
    }

    
    public function atualizar(){
        return (new DataBase('alunos'))->update('id '.$this->id,[
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'telefone' => $this->telefone,
            'email_pessoal' => $this->email_pessoal,
            'email_institucional' => $this->email_institucional,
            'curso' => $this->curso,
            'periodo' => $this->periodo,
            'data' => $this->data,
            'senha' => $this->senha
        ]);
    }

    public function excluir(){
        return (new DataBase('alunos'))->delete('id = '.$this->id);
    }

    public static function getAlunos($where,$order,$limit){
        return (new DataBase('alunos'))->select($where,$order,$limit)
                                       ->fetchAll(PD0::FETCH_CLASS,self::class);
    }

    public function getAluno($id){
        return (new DataBase('alunos'))->select('id = '.$this->id)
                                        ->fetchObject(self::class);
    }

    public function getAlunoByCpf($cpf){
        return (new DataBase('alunos'))->select('cpf = '.$this->cpf)
                                       ->fetchObject(self::class);
    }
   }