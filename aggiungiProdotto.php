<?php
    require("constants.php");
    if(isUserLoggedIn() == 2){
        $templateParams["titolo"] = "CartaNet - Aggiungi prodotto";
        $templateParams["nomeFile"] = "aggiungiProdotto-form.php";
        require_once("template/baseVenditore.php");
    }else{
        header("location:./login.php");
    }
    
?>