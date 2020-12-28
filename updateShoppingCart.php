<?php
require_once("constants.php");

$db->updateShoppingCart($_GET["IdProdotto"], $_SESSION["IdUtente"]);

header("location:./carrello.php?IdUtente=$_SESSION[IdUtente]");
?>