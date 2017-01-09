
<?php
$econfirma = "";

if(isset($_POST['validar'])){
     if(isset($_POST['confirmar']))
    {
          header('Location: user.php');
     }
     else
     {
       $econfirma = "Marque aceitar as condiçoes para seguir em frente";
     }
}
 ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="forms.css" rel="stylesheet" type="text/css"/>
    <link href="../Inc/Libs/reset.css" rel="stylesheet" type="text/css"/>
    <link href="../Inc/Libs/bootstrap.css" rel="stylesheet" type="text/css"/>
  </head>
  <body class="body-bg">



    <div class="container-base">


      <div class="base-a">

        <div class="form-group">
        <h4>Termo de Responsabilidade</h4>
        </div>
        <hr>
        <form method="post">
         <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
         </p>
         <br>
         <div class="checkbox">
           <label>
             <input type="checkbox" name="confirmar" value="confirmado"> Aceito as condições
           </label>
         </div>
         <button type="submit" name="validar" class="btn btn-default">Confirmar</button>
        </form>
        <div class="bx">
           <?php
           echo  $econfirma;
           ?>
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
