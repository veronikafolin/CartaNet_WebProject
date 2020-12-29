<?php
    require("constants.php");

    if(isUserLoggedIn() == 1){
        $db->updateShoppingCart($_GET["IdProdotto"], $_SESSION["IdUtente"]);
        header("location:./carrello.php?IdUtente=$_SESSION[IdUtente]");
    }else{
        header("location:./login.php");
    }

?>