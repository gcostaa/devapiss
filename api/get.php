<?php

require_once("app/controller/get/request.php");

if(empty($_GET["id"])){

    $msg = "Informe o id da credencial. Exemplo: get.php?id=";
    echo "<script type='text/javascript'>alert('$msg');</script>";
}else{

    $id = $_GET["id"];
    get($id);
}


?>
