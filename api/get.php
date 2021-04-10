<?php

require_once("app/controller/get/request.php");

#validates if the get parameter is set
if(empty($_GET["id"])){


    $msg = "Enter the credential id. Example: get.php?id=";
    echo "<script type='text/javascript'>alert('$msg');</script>";

}else{


    #executes the get method of the request.php class
    $id = $_GET["id"];
    get($id);
}


?>
