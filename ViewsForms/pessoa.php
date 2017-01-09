
<?php
include ('php/conexao.php');
$pdo = conectar();
session_start();

if(isset($_POST['cadastrar'])){

  $erro = "";
  $nome = $_POST['nome'];
  $snome = $_POST['snome'];
  $nnome = $_POST['nnome'];
  $dnascimento = $_POST['dnascimento'];
  $ecivil = $_POST['ecivil'];

  $dnascimento = date("Y-m-d",strtotime(str_replace('/','-',$dnascimento)));
  //$mycod = $_COOKIE['mycodcokie'];
  $mycod =  $_SESSION['mycod'];

 if(!empty($mycod)){
      if(!empty($nome) && !empty($snome)){
  //--preparar o cadastro---
      $cadastrar=$pdo->prepare("INSERT INTO `pessoa` (`nome`, `snome`, `nnome`, `dnascimento`,`ecivil`,`mycod`) VALUES (:nome, :snome, :nnome,:dnascimento, :ecivil, :mycod)");
      $cadastrar->bindValue(	":nome",$nome);
      $cadastrar->bindValue(	":snome", $snome);
      $cadastrar->bindValue(	":nnome", $nnome);
      $cadastrar->bindValue(	":dnascimento", $dnascimento);
      $cadastrar->bindValue(	":ecivil", $ecivil);
      $cadastrar->bindValue(	":mycod", $mycod);
      //--cadastra
      $cadastrar->execute();
      //  setcookie("mycodcokie",null,0);
      header('Location: MyAdventure/MyAdv.php');
      $erro = "Cadastrado";
    }
    else
    {
      $erro = "Preencha todos os campos do formulario";
    }
  }

  else
  {
      $erro = "Não pegou o MyCod ".$mycod;
  }


}
else
  {
      $erro = "Erro ao clicar no botao";
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
         <h4>Dados Pessoais</h4>
        </div>
        <hr>
        <form method="POST">

         <div class="form-group">
           <input type="text" class="form-control" name="nome" id="celular" placeholder="Nome">
         </div>
         <div class="form-group">
           <input type="text" class="form-control" name="snome" id="" placeholder="Sobre Nome">
         </div>
         <div class="form-group">
           <input type="text" class="form-control" name="nnome" id="" placeholder="Nick Name">
         </div>
         <div class="form-group">
           <input type="text" class="form-control" name="dnascimento" id="" placeholder="Data Nascimento">
         </div>

         <select name="ecivil" class="form-control">
           <option>Estado Civil</option>
           <option>Solteira(o)</option>
           <option>Casado(a)</option>
           <option>Enrolados</option>
            <option>Namorando</option>

         </select>

         <div class="bx">


         </div>

       <div class="bx">
         <!-- Indicates a successful or positive action -->
         <input type="submit" class="btn btn-default" name="cadastrar" value="Cadastrar">

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
          <a href="user.php">Sair</a>
          <a href="/MyAdventure/">Voltar</a>
        </p>
      </div>

      </div>

    </div>



  </body>
</html>
