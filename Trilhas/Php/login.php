<?php

 $data = json_decode(file_get_contents('php://input'));

 if($data->celular == 'adm' && $data->senha =='adm'){
   session_start();
   $_SESSION['uid'] = uniqid('ang_');
   print $_SESSION['uid'];
 ?>
