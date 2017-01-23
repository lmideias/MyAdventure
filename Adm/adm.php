<!DOCTYPE html>
<html ng-app="myApp">
  <head>
    <meta charset="utf-8">
    <title>Mobile Adm</title>

   <link rel="stylesheet" href="Css/mob.css" />
   <link href="Css/Reset.css" rel="stylesheet" type="text/css"/>
  <link href="../Inc/Libs/bootstrap.css" rel="stylesheet" type="text/css"/>

   <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="../Inc/Libs/angular-angular.js" type="text/javascript"></script>
    <script src="../Inc/Libs/angular-router.js" type="text/javascript"></script>
    <script src="Js/adm.js" type="text/javascript"></script>
  </head>
  <body class="lmi-body-bg">
    <div class="lmi-linha-full"> </div>
      <div class="lmi-header-full">
        <div class="lmi-header-center">
          <div class="lmi-header-center-leftbox">
              <img src="" alt="">
          </div>
          <div class="lmi-header-center-linha">
            <div class="menu-options">
              <div class="menu-a">
                  Menu
              </div>
              <div class="menu-b">
                   Chat
              </div>
            </div>
          </div>
          <div class="lmi-header-center-linha">

          </div>
          <div class="lmi-header-center-linha">
             <p class="online">Online: 12</p>
          </div>
        </div>
      </div>

  <div class="lmi-body-full">
      <div class="lmi-body">
        <?php include("Views/formulario.php"); ?>

      </div>
  </div>







  </body>
</html>
