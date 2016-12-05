<?php
include ('Conexao.php');
$pdo = conectar();


$data = json_decode(file_get_contents("php://input"));

$userid = "";
//$celular = $data->celular;
//$senha = $data->senha;

$celular = "25212526";
$senha = "asdewq";
$ativo = "1";
$datacad = date("Y-m-d");

$q = "INSERT INTO `usuario` (`userid`,`celular`, `senha`, `ativo`, `datacad`) VALUES (:userid,:celular, :senha, :ativo,:datacad)";

$query = $pdo->prepare($q);

$execute = $query->execute(array(
	":userid" => $userid,
	":celular" => $celular,
	":senha" => $senha,
	":ativo" => $ativo,
	":datacad" => $datacad
));

echo json_encode($celular);

?>
