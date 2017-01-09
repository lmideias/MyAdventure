<?php

session_start();
$mycod =  $_SESSION['mycod'];

if(!empty($mycod)){
//echo "Logado  ".$mycod;
}else{
    header('Location: /MyAdventure/ViewsForms/login.php');
}

 ?>

<?php

if(isset($_POST['sair'])){
  $_SESSION['mycod'] = null;
  session_destroy();
  header('Location: /MyAdventure/ViewsForms/login.php');
}


 ?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title>MyAdventure</title>
       <link href="Css/MyAdv.css" rel="stylesheet" type="text/css"/>
       <link href="../Inc/Libs/reset.css" rel="stylesheet" type="text/css"/>
       <link href="../Inc/Libs/bootstrap.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
<div class="lmi-head">

  <div class="lmi-head-center">
      <div class="lmi-head-center-user">
         <div class="lmi-head-center-user-myadv">
            <h4><?php echo "MyCod ".$mycod; ?></h4>
         </div>
        <div class="lmi-head-center-user-img">
          <form method="post">
              <input type="submit" class="btn btn-default" name="sair" value="Sair">
          </form>

        </div>
      </div>
  </div>

</div>

<div class="lmi-head-prop">
       <h5>Propaganda central do adventure</h5>
</div>

<div class="lmi-body">
  <div class="lmi-body-center">
    <div class="lmi-body-center-left">

    </div>
    <div class="lmi-body-center-center">
       <div class="container-a">
<h3>Titulo</h3><br>
          Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.

       </div>
       <div class="container-a">
<h3>Titulo</h3><br>
Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.

       </div>
    </div>
    <div class="lmi-body-center-right">
       <div class="prop1">
         <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- PropResponse -->
<ins class="adsbygoogle"
   style="display:block"
   data-ad-client="ca-pub-5664434222802350"
   data-ad-slot="9520149548"
   data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
       </div>
    </div>
  </div>
</div>








<div class="lmi-footer">
  <div class="lmi-footer-center">
  </div>
</div>
  </body>
</html>
