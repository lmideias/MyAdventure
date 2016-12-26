
<?php
   //session_start();
   //$cod =  "mycod".$_SESSION['mycod'];
?>

<!DOCTYPE html>
<html ng-app="myApp">
  <head>
    <meta charset="utf-8">
    <title>MyAdventure</title>
     <link href="Css/myadv-mobile.css" rel="stylesheet" type="text/css"/>
      <link href="Css/myadv-desktop.css" rel="stylesheet" type="text/css"/>
      <link href="../Inc/Libs/reset.css" rel="stylesheet" type="text/css"/>
        <link href="../Inc/Libs/bootstrap.css" rel="stylesheet" type="text/css"/>

      <script src="../Inc/Libs/angular-angular.js" type="text/javascript"></script>
        <script src="../Inc/Libs/angular-router.js" type="text/javascript"></script>
      <script src="Js/a-user.js" type="text/javascript"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">


  </head>
  <body>


<div ng-view>

</div>











   <div class="barra-full">
      <div class="barra-full-center">
        <div class="bx-1">

        </div>
        <div class="bx-2">

        </div>
        <div class="bx-3">
          <h4>Sair</h4>
        </div>
     </div>
   </div>

    <div class="body-container">
      <div class="a-container" >
        <h1 class="">{{nome}}</h1>
      </div>
    </div>
  </body>
</html>
