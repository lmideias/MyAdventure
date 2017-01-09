
<?php
include ('php/conexao.php');
$pdo = conectar();


if(isset($_POST['cadastrar'])){
  $erro = "";
  $celular = $_POST['celular'];
  $senha = $_POST['senha'];
  $ativo = 1;
  $datacad = date("y/m/d");
  $tipo = 1;

  if(!empty($celular) && !empty($senha)){
  //--preparar o cadastro---
  $cadastrar=$pdo->prepare("INSERT INTO `usuario` (`celular`, `senha`, `ativo`, `datacad`,`tipo`) VALUES (:celular, :senha, :ativo,:datacad, :tipo)");
  $cadastrar->bindValue(	":celular",$celular);
  $cadastrar->bindValue(	":senha", $senha);
  $cadastrar->bindValue(	":ativo", $ativo);
  $cadastrar->bindValue(	":datacad", $datacad);
    $cadastrar->bindValue(	":tipo", $tipo);

  //---validar os dados
  $validar=$pdo->prepare("SELECT * FROM usuario WHERE celular=?");
  $validar->execute(array($celular));

  if($validar->rowCount()== 0):
    //--cadastra
    $cadastrar->execute();
    $id =  $pdo->lastInsertId();
  //  setcookie("mycodcokie",$id,3600);
  header('Location: pessoa.php');

      //----- SESSION ID, CELULAR, SENHA -----

      session_start();
      $_SESSION['mycod'] = $id;
      $_SESSION['celular'] = $celular;
      $_SESSION['senha'] = $senha;

      //$cel =   $_SESSION['celular'];
      //$sen =   $_SESSION['senha'];
      //$cod =   $_SESSION['mycod'];

      //echo "O seu MyCod e ".$id." para o número cadastrado  ";

  else:

    $erro = "O Número $celular Já está cadastrado, Digite outro";
  endif;
  }else{

      $erro = "Digite o Número de Celular e Senha";
  }






}



 ?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro</title>
    <link href="forms.css" rel="stylesheet" type="text/css"/>
    <link href="../Inc/Libs/reset.css" rel="stylesheet" type="text/css"/>
    <link href="../Inc/Libs/bootstrap.css" rel="stylesheet" type="text/css"/>
  </head>
  <body class="body-bg">


    <div class="container-base">


      <div class="base-a">
        <div class="bx">
         <h4>Cadastrar Usuário</h4>
        </div>
        <hr>
        <form method="POST">
       <div class="form-inline">
         <div class="form-group">
           <input type="text" class="form-control" name="celular" id="celular" placeholder="Celular">
         </div>
         <div class="form-group">
           <input type="text" class="form-control" name="senha" id="senha" placeholder="Senha">
         </div>
       </div>

       <div class="bx">
         <!-- Indicates a successful or positive action -->
         <input type="submit" class="btn btn-default" name="cadastrar" value="Cadastrar">

       </div>

      </form>
      <div class="bx">
        <p class="">
          <a href="user.php">Sair</a>
          <a href="/MyAdventure/">Voltar</a>
        </p>
      </div>

      </div>

    </div>



  </body>
</html>
