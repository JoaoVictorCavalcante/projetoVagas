<?php
   use App\Session\Login;

   $usuarioLogado = Login::getUsuarioLogado();
   $usuario = $usuarioLogado ? 
   '<button type="button" class="btn btn-primary me-2">'.$usuarioLogado['nome'].'</button>
   <button type="button" class="btn btn-warning me-2"><a href="logout.php>Sair</a></button>' :
   '<button type="button" class="btn btn-primary me-2">Visitante</button>
   <button type="button" class="btn btn-light me-2"><a href="login.php">Entrar</a></button>'
   ?>

<!DOCTYPE html>

<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>WDEV-Vagas</title>
  </head>
  <div class="b-example-divider"></div>
      <div class="container">
      <!-- HEADER -->
<header class="fixed-top w-100 bg-info text-white border-bottom">
  <div class="container d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
    <div class="col-md-3 mb-2 mb-md-0">
  <a href="" class="d-inline-flex link-body-emphasis text-decoration-none">
    <img src="https://bdone.com.br/wp-content/uploads/2022/04/vagas.jpg" alt="" width="70" height="40">
  </a>
</div>


    <div class="col-md-3 text-end">
      <?=$usuario?>
    </div>
  </div>
</header>

<!-- CONTEÚDO -->
<main class="container mt-5 pt-5">
</main>

  <body class="bg-secondary">

    <div class="container">
   
     <div class="jumbotron bg-danger">
        <h1>PROJETO VAGAS</h1> Vagas</h1>
        <p>Exemplo de CRUD com PHP orientado a objetos</p>
     </div>
     <a class="nav-link" href="/projetoVagas/index.php">Home</a>
     <a class="nav-link" href="/projetoVagas/vaga/listar.php">VAGAS</a>
     <a class="nav-link" href="/projetoVagas/aluno/listar.php">ALUNOS</a>
   

   