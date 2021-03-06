<?php

include ('php/conexao.php');
$pdo = conectar();
$erro = "";

if(isset($_POST['logar'])){
  $erro = "";
  $celular = $_POST['celular'];
  $senha = $_POST['senha'];


  if(!empty($celular) && !empty($senha)){

  //--preparar o cadastro---
  $buscar=$pdo->prepare("SELECT * FROM usuario WHERE celular=:celular AND senha=:senha");
  $buscar->bindValue(	":celular",$celular);
  $buscar->bindValue(	":senha", $senha);
  $buscar->execute();

  $linha = $buscar->fetchAll(PDO::FETCH_ASSOC);

/*--------------------------------------------*/

if($linha != null){


  //---validar os dados

  foreach ($linha as $dado) {
  $userid = $dado['userid'];
  $celular = $dado['celular'];
  $ativo = $dado['ativo'];
  $tipo = $dado['tipo'];

  }



if ($ativo == 1) {

  //----- SESSION  -----

      session_start();
      $_SESSION['mycod'] = $userid;
      $_SESSION['celular'] = $celular;
      $_SESSION['tipo'] = $tipo;

/*--------------------------------------------*/

    if ($tipo == 1) {
        header('Location: /MyAdventure/MyAdventure/MyAdv.php');
      }else{
        header('Location: Hub.php');
      }

}else{
  $erro = "Usuario Bloqueado, entre em contato com os administradores";
}

}else{
  $erro = "Celular ou Senha incorretos";
}

  }else{
  $erro = "Preencha todos os campos acima";
  }
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="forms.css" rel="stylesheet" type="text/css"/>
    <link href="../Inc/Libs/reset.css" rel="stylesheet" type="text/css"/>
    <link href="../Inc/Libs/bootstrap.css" rel="stylesheet" type="text/css"/>
  </head>
  <body class="body-bg">

    <div class="container-base">

      <div class="base-a">
        <div class="bx">
         <h4>Login</h4>
        </div>

        <form  method="post">
       <div class="form-inline">
         <div class="form-group">
           <input type="text" class="form-control" name="celular" id="celular" placeholder="Celular">
         </div>
         <div class="form-group">
           <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
         </div>
       </div>

       <div class="bx">
         <!-- Indicates a successful or positive action -->
      <input type="submit" class="btn btn-default" name="logar" value="Logar">
       </div>

      </form>
      <div class="bx">
        <p class="">
          <?php
            echo $erro;
           ?>
        </p>
      </div>

      <div class="bx">
        <p class="">
          Se ainda nao fez o cadastro clique aqui e faça o seu para poder participar   <a href="termouser.php">Cadastrar</a>
          <a href="/MyAdventure/">Voltar</a>
        </p>
      </div>

      </div>

    </div>



  </body>
</html>
