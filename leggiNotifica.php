<?php
    require("constants.php");
    if(isUserLoggedIn() != 0){
        require_once("constants.php");
        $db->setRead($_GET["IdNotifica"]);
        header("location:./notifiche.php");
    }else{
        header("location:./login.php");
    }
   
?>