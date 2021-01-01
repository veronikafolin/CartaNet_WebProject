<?php
    require("constants.php");
   
    if(isUserLoggedIn() == 2){
        $templateParams["titolo"] = "CartaNet -Modifica prodotto";
        $templateParams["nomeFile"] = "modificaProdotto-form.php";
        $templateParams["prodotto"] = $db->getProductById($_GET["IdProdotto"]);
        require_once("template/baseVenditore.php");
    }else{
        header("location:./login.php");
    }
?>