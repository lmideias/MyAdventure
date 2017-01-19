<?php
include ('Conexao.php');
$pdo = conectar();


$data = json_decode(file_get_contents("php://input"));

$celular = $data->celular;
$senha = $data->senha;

//$celular = '25212526';
//$senha = 'asdewq';

if(!empty($celular) && !empty($senha)){

//---validar os dados
$buscarUser=$pdo->prepare("SELECT * FROM usuario WHERE celular = :celular AND senha = :senha");
$buscarUser->bindValue(	":celular",$celular);
$buscarUser->bindValue(	":senha", $senha);
$buscarUser->execute();

$linha = $buscarUser->fetchAll(PDO::FETCH_OBJ);

foreach ($linha as $listar) {
    $ID = $listar->userid;
}

//----- SESSION CELULAR, SENHA -----

if($ID):
  echo $ID;
else:
  echo "Nao encontramos o usuario";
endif;
}else{
    echo "Digite o Número de Celular e Senha";
}

echo json_encode($ID);

?>
