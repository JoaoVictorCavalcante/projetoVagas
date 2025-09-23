<?php

require __DIR__ . '/../vendor/autoload.php';

use \App\Entity\Vaga;


//VALIDACAO DO ID
if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
  header('location: listar.php?status=error');
  exit;
}


//CONSULTA VAGA
$obVaga = Vaga::getVaga($_GET['id']);

//VALIDACAO VAGA
if(!$obVaga instanceof Vaga){
  header('location:listar.php?status=error');
  exit;
}

//echo "<pre>"; print_r($_POST); echo "</pre>";exit;

//VALIDACAO DO POST-->
if (isset($_POST['excluir'])) {
  
  $obVaga->excluir();

  header('location: listar.php?status=success');
  exit;
}

include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/confirmarexclusao.php';
include __DIR__ . '/../includes/footer.php';