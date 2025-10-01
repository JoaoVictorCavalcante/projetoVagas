<?php
 
  require __DIR__.'/../vendor/autoload.php';
 
  define('TITLE','Cadastrar Vaga');
  use \App\Entity\Vaga;

  //echo "<pre>"; print_r($_POST); echo "</pre>";exit;
  
  $obVaga = new Vaga;
  //VALIDACAO DO POST-->
  if(isset($_POST['titulo'],$_POST['descricao'],$_POST['quantidade'],$_POST['remuneracao'],$_POST['data_abertura'],$_POST['data_fechamento'])){
  
    $obVaga->titulo = $_POST['titulo'];
    $obVaga->descricao = $_POST['descricao'];
    $obVaga->quantidade = $_POST['quantidade'];
    $obVaga->remuneracao = $_POST['remuneracao'];
    $obVaga->dataAbertura = $_POST['data_abertura'];
    $obVaga->dataFechamento = $_POST['data_fechamento'];

    $obVaga->cadastrar();
   

    

    header('location: listar.php?status=success');
    exit;
  }

  include __DIR__.'/../includes/header.php';
  include __DIR__.'/formulario.php';
  include __DIR__.'/../includes/footer.php';