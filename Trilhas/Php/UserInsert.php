<?php
include ('Conexao.php');
$pdo = conectar();


$data = json_decode(file_get_contents("php://input"));

$celular = $data->celular;
$senha = $data->senha;
$ativo = "1";
$datacad = date("Y-m-d");

if(!empty($celular) && !empty($senha)){
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
  $id =  $pdo->lastInsertId();

    //----- SESSION ID, CELULAR, SENHA -----

    session_start();
    $_SESSION['mycod'] = $id;
    $_SESSION['celular'] = $celular;
    $_SESSION['senha'] = $senha;

    $cel =   $_SESSION['celular'];
    $sen =   $_SESSION['senha'];
    $cod =   $_SESSION['mycod'];

    echo "O seu MyCod e ".$id." para o número cadastrado  ".$cel, $sen,$cod;

else:
  echo "O Número $celular Já está cadastrado, Digite outro";
endif;
}else{
    echo "Digite o Número de Celular e Senha";
}
echo json_encode($celular);

?>
