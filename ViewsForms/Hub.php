<?php
if (isset($_POST["myadv"])) {
  header('Location: aTeste.php');
}
if (isset($_POST["adm"])) {
  header('Location: bTeste.php');
}
if (isset($_POST["secret"])) {
  header('Location: Hub.php');
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
         <h4>Escolha uma opção</h4>
        </div>
        <hr>
        <form method="POST">

         <div class="form-group">
           <!-- Indicates a successful or positive action -->
           <input type="submit" class="btn btn-default" name="myadv" value="MyAdventure">
          </div>
         <div class="form-group">
           <!-- Indicates a successful or positive action -->
           <input type="submit" class="btn btn-default" name="adm" value="Administração">
</div>
         <div class="form-group">
           <!-- Indicates a successful or positive action -->
           <input type="submit" class="btn btn-default" name="secret" value="Portal Secreto">
</div>


         <div class="bx">


         </div>



      </form>



      </div>

    </div>



  </body>
</html>
