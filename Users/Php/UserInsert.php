<?php
include ('Conexao.php');
$pdo = conectar();


$data = json_decode(file_get_contents("php://input"));


//$celular = $data->celular;
//$senha = $data->senha;

$celular = "983174044";
$senha = "asdewq";
$ativo = "1";
$datacad = date("Y-m-d");

//--preparar o cadastro---
$cadastrar=$pdo->prepare("INSERT INTO `usuario` (`celular`, `senha`, `ativo`, `datacad`) VALUES (:celular, :senha, :ativo,:datacad)");
$cadastrar->bindValue(	":celular",$celular);
$cadastrar->bindValue(	":senha", $senha);
$cadastrar->bindValue(	":ativo", $ativo);
$cadastrar->bindValue(	":datacad", $datacad);

//---validar os dados
$validar=$pdo->prepare("SELECT * FROM usuario WHERE celular=?");
$validar->execute(array($celular));
if($validar->rowCount()== 0):
  //--cadastra
  $cadastrar->execute();
else:
  echo "Já existe no banco de dados";
endif;

echo json_encode($celular);

?>
