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
if(!empty($mycodk)){
echo "Logado  ".$mycodk;
}else{
    header('Location: /MyAdventure/ViewsForms/login.php');
}

 ?>
