<?php
if(isset($_POST['participar'])){

  $dado1 = $_SESSION['mycod'];
  $dado2 = $_SESSION['celular'];
  $dado3 = $_SESSION['senha'];

if (!empty($dado1)&&!empty($dado2)&&!empty($dado3)) {
header('Location: ViewsForms/login.php');
}else {
header('Location: ./MyAdventure/MyAdv.php');
}

}



 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Trilhas Adventure</title>
   <link href="Css/index.css" rel="stylesheet" type="text/css"/>
   <link href="Inc/Libs/reset.css" rel="stylesheet" type="text/css"/>

  </head>
  <body>
    <div class="box-index-full">
          <div class="box-index-full-linha">
          </div>
              <div class="box-index-center">
                <div class="box-index-center-left">
  <h1>caixa esquerda</h1>
                </div>
                <div class="box-index-center-center">
                  <form method="post">
                    <div class="participar2" name="participar">
                        <input type="submit" class="participar" name="participar" value="Participar">
                    </div>

                  </form>

                </div>
                <div class="box-index-center-right">
                       <div class="">
                          <!-- Widget Previs&atilde;o de Tempo CPTEC/INPE -->
                          <iframe allowtransparency="true" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" src="http://www.cptec.inpe.br/widget/widget.php?p=null&w=h&c=f3f3f3&f=423f42" height="200px" width="215px"></iframe>
                          <noscript>Previs&atilde;o de <a href="http://www.cptec.inpe.br/cidades/tempo/null"></a> oferecido por <a href="http://www.cptec.inpe.br">CPTEC/INPE</a></noscript>
                          <!-- Widget Previs&atilde;o de Tempo CPTEC/INPE -->

                       </div>
                </div>





              </div>
    </div>
    <div class="box-index-body">
        <div class="boxMenu">
            <h1>Dicas</h1>
        </div>
        <div class="boxMenu">
            <h1>Livre</h1>
        </div>
        <div class="boxMenu">
            <h1>Trilhas</h1>
        </div>
        <div class="boxMenu">
            <h1>Sobre</h1>
        </div>
    </div>

  </body>
</html>
