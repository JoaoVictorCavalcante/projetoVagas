<?php
 
  require __DIR__.'/../vendor/autoload.php';
 
  define('TITLE','Cadastrar Aluno');
  use \App\Entity\Aluno;

  //echo "<pre>"; print_r($_POST); echo "</pre>";exit;
  
  $obAluno = new Aluno();
  //VALIDACAO DO POST-->
  if(isset($_POST['nome'], $_POST['cpf'], $_POST['telefone'], $_POST['email_pessoal'],$_POST['email_institucional'], $_POST['curso'],$_POST['periodo'],$_POST['data'],$_POST['senha'])){
       $obAluno->nome = $_POST['nome'];
       $obAluno->cpf = $_POST['cpf'];
       $obAluno->telefone = $_POST['telefone'];
       $obAluno->email_pessoal = $_POST['email_pessoal'];
       $obAluno->email_institucional = $_POST['email_institucional'];
       $obAluno->curso = $_POST['curso'];
       $obAluno->periodo = $_POST['data'];
        
      $obAluno->cadastrar();
       
    header('location: listar.php?status=success');
    exit;
  }

  include __DIR__.'/../includes/header.php';
  include __DIR__.'/formulario.php';
  include __DIR__.'/../includes/footer.php';