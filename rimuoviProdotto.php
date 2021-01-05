<?php

    require("constants.php");
    $prodotto = $_GET["IdProdotto"];
    $db->removeFromShoppingCart($prodotto, $_SESSION["IdUtente"]);
    header("location:./carrello.php");
?>