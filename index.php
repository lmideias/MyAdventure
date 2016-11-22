<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Trilhas Adventure</title>
   <link href="./index-Views/Css/index.css" rel="stylesheet" type="text/css"/>
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
  </body>
</html>
