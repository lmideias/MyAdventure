<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Trilhas Adventure</title>
   <link href="Css/user.css" rel="stylesheet" type="text/css"/>
   <script src="../Inc/Libs/jquery-3.1.1.min.js" type="text/javascript"></script>
  </head>
  <body>
    <?php
    require('../Inc/Config.inc.php');
    ?>
    <div class="box-full">
              <div class="box-center">

              </div>
    </div>

    <div class="container-a-full">
         <div class="container-a">
           <h3 class="">Cadastrar Usuario</h3>
           <form action="caduser.php" method="post">

              <p><input type="text" name="celular" placeholder="Celular"/></p>
              <p><input type="text" name="senha" placeholder="Senha"/></p>

             <p><input type="submit" value="Cadastrar"></p>
             <br />
              <h3 class="">Cadastrar Usuario</h3>

           </form>
         </div>
         <div class="container-b">
           <?php
           $conn = new Conn;
            var_dump($conn);
           ?>
         </div>
    </div>

     <script src="" type="text/javascript"></script>
  </body>
</html>
