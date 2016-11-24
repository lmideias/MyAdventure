<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Trilhas Adventure</title>
   <link href="./index-Views/Css/index.css" rel="stylesheet" type="text/css"/>
   <script src="./Inc/Libs/jquery-3.1.1.min.js" type="text/javascript"></script>
  </head>
  <body>
    <div class="box-full">
              <div class="box-center">
                   <?php
                   require('./Inc/Config.inc.php');
                   $conn = new Conn;
                    var_dump($conn);
                   ?>
              </div>
    </div>

     <script src="./Js/index.js" type="text/javascript"></script>
  </body>
</html>
