<?php
include ('Conexao.php');
$pdo = conectar();

$buscar=$pdo->prepare("SELECT * FROM usuario");
$buscar->execute();

$data = $buscar->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);

?>
