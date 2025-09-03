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
        <header
          class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom"
        >
          <div class="col-md-3 mb-2 mb-md-0">
            <a
              href="/"
              class="d-inline-flex link-body-emphasis text-decoration-none"
            >
              <svg
                class="bi"
                width="40"
                height="32"
                role="img"
                aria-label="Bootstrap"
              >
                <use xlink:href="#bootstrap"></use>
              </svg>
            </a>
          </div>
          <ul
            class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0"
          >
            <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="#" class="nav-link px-2">Features</a></li>
            <li><a href="#" class="nav-link px-2">Pricing</a></li>
            <li><a href="#" class="nav-link px-2">FAQs</a></li>
            <li><a href="#" class="nav-link px-2">About</a></li>
          </ul>
          <div class="col-md-3 text-end">
            
            <?=$usuario?>
          </div>
        </header>
      </div>
      <div class="b-example-divider"></div>
  <body class="bg-dark">

    <div class="container">
   
     <div class="jumbotron bg-danger">
        <h1>WDEV Vagas</h1>
        <p>Exemplo de CRUD com PHP orientado a objetos</p>
     </div>

   