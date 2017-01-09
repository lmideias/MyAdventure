<?php
echo "Minha pagina";
echo "<br>";
echo "Administração";
echo "<br>";
echo "Sair";
$mostrar1 = "block";
$mostrar2 = "block";
$mostrar3 = "block";

if (isset($_POST["validar1"])) {
  $mostrar2 = "none";
}

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Escolhas</title>

<style media="screen">
  .b1{
 width: 300px;
height: 100px;
background-color: red;
display: <?= $mostrar; ?>;
float: left;

}
.b2{
width: 300px;
height: 100px;
background-color: red;
display: <?php $mostrar2; ?>;
float: left;
margin-left: 15px;

}

.b3{
width: 300px;
height: 100px;
background-color: red;
display: block;
float: left;
margin-left: 15px;

}
</style>

<script src="jquery.js"></script>

<script type="text/javascript">

  $(document).ready(function(){
alert('Dom carregado');
});


</script>


  </head>
  <body>
    <form class="" method="post">
      <div class="b1">
        <h1>caixa 01</h1>
         <input type="submit" name="validar1" value="Valdar 1">
      </div>
      <div class="b2">
          <h1>caixa 02</h1>
<input type="submit" name="validar2" value="Valdar 2">
      </div>
      <div class="b3">
          <h1>caixa 03</h1>
<input type="submit" name="validar3" value="Valdar 3">
      </div>
    </form>

  <div class="">

  </div>

  </body>
</html>
