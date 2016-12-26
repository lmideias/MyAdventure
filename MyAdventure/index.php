<!DOCTYPE html>
<html ng-app="myApp">
  <head>
    <meta charset="utf-8">
    <title>MyAdventure</title>
       <link href="Css/main.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>

  <div ng-view>

  </div>






              <script src="../Inc/Libs/angular-angular.js" type="text/javascript"></script>
              <script src="../Inc/Libs/angular-router.js" type="text/javascript"></script>

              <script src="Js/Aplicativos/app.js" type="text/javascript"></script>

              <script src="Js/Diretorios/loginDirective.js" type="text/javascript"></script>

                  <script src="Js/Controles/loginCtrl.js" type="text/javascript"></script>
                  <script src="Js/Controles/homeCtrl.js" type="text/javascript"></script>

                  <script src="Js/Servicos/loginService.js" type="text/javascript"></script>
                  <script src="Js/Servicos/sessionService.js" type="text/javascript"></script>

      </head>
  </body>
</html>
