<?php
    require("constants.php");
    if(isUserLoggedIn() == 1){
        $templateParams["titolo"] = "CartaNet - I miei Ordini";
        $templateParams["nomeFile"] = "template/mieiOrdini.php";
        $templateParams["mieiOrdini"] = $db->getOrdersById($_SESSION["IdUtente"]);
        require_once("template/base.php");
    }else{
        header("location:./login.php");
    }
    
?>