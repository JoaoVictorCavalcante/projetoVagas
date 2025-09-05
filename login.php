<?php
 
  require __DIR__.'/vendor/autoload.php';

  
   use \App\Entity\Vaga;
   use \App\Session\Login;
   
  Login::requereLogout();
  $msg ='';

  if(isset($_POST['cpf'],$_POST['senha'])){
    $aluno = Aluno::getAlunoByCpf($_POST['cpf']);
    if(!$aluno instanceof Aluno || !password_verify($_POST['senha'], $aluno->senha)){
     $msg = "Usuario ou senha Incorretos!";
    }else{
      Login::login($aluno);
    } 
  }
   

   
   

   

  include __DIR__.'/includes/header.php';
  include __DIR__.'/includes/formulario-login.php';
  include __DIR__.'/includes/footer.php';