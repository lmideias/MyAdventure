<?php
include ('Conexao.php');
$pdo = conectar();


$data = json_decode(file_get_contents("php://input"));


//$celular = $data->celular;
//$senha = $data->senha;

$userid = 4;

//---validar os dados
$buscarUserTodos=$pdo->prepare("SELECT * FROM usuario);
$buscarUserTodos->execute();

$linha = $buscarUserTodos->fetchAll(PDO::FETCH_ASSOC);

foreach ($linha as $listar) {
    echo "$listar['celular']";
}


echo json_encode($userid);

?>
