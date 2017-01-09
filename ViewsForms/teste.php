<?php
//session_start();
//$mycod =  $_SESSION['mycod'];
//echo $mycod ;
//$_SESSION['mycod'] = null;
//session_destroy();
//echo $mycod ;

//$date = "26/11/1976";

//$date = date("Y-m-d",strtotime(str_replace('/','-',$date)));

//echo $date;
//$mycodk = null;
/*
if(!empty($mycodk)){
echo "Logado  ".$mycodk;
}else{
    header('Location: /MyAdventure/ViewsForms/login.php');
}
*/

$celular = "25216005";
$senha = "abcd";
$tipo = 1;

function verificartipo($tipo){
  switch ($tipo) {
    case '1':
    echo "Usuario normal";
      header('Location: aTeste.php');
      break;
      case '2':
        header('Location: Hub.php');
        break;

    default:
      echo "Erro no systema";
      break;
  }
}

if(!empty($celular) && !empty($senha)){

verificartipo($tipo);



}else{
echo "Campos vazios";
}

















 ?>
