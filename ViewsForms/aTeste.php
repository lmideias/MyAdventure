<?php
//echo "Pagina do usuario";
 ?>

<?php

include ('php/conexao.php');
$pdo = conectar();

  $celular = "44444444";
  $senha = "abcd";


  if(!empty($celular) && !empty($senha)){
  //--preparar o cadastro---
  $buscar=$pdo->prepare("SELECT * FROM usuario WHERE celular=:celular AND senha=:senha");
  $buscar->bindValue(	":celular",$celular);
  $buscar->bindValue(	":senha", $senha);
  $buscar->execute();

$linha = $buscar->fetchAll(PDO::FETCH_ASSOC);
//var_dump($linha);

//echo "<pre>",print_r($linha, true),"</pre>";


foreach ($linha as $dado) {
$id = $dado['useid'];
$au = $dado['celular'];
$senh = $dado['senha'];
$at = $dado['ativo'];
}

echo "<br>";
echo ($at);
echo "<br>";
echo ($senh);

if ($at == 2) {
echo "<br>";
  echo "usuario normal";
}else{
echo "<br>";
 echo "admin";
}


}else {
echo "campos sem nada";
}

 ?>
