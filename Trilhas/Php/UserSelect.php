<?php
include ('Conexao.php');
$pdo = conectar();


$data = json_decode(file_get_contents("php://input"));


//$celular = $data->celular;
//$senha = $data->senha;

$userid = 4;

//---validar os dados
$buscarUser=$pdo->prepare("SELECT * FROM usuario WHERE userid = :userid");
$buscarUser->bindValue(":userid",1,PDO::PARAM_INT);
$buscarUser->execute();

$linha = $buscarUser->fetchAll(PDO::FETCH_OBJ);

foreach ($linha as $listar) {
    echo "Celular:".$listar->celular."<br />";

}


echo json_encode($userid);

?>
