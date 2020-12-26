<?php
require_once("constants.php");

$db->updateShoppingCart($_GET["IdProdotto"], $_SESSION["IdUtente"]);

header("location:./prodotto.php?IdProdotto=".$_GET["IdProdotto"]);
?>