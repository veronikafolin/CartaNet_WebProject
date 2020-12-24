<?php
require_once("../constants.php");

$db->updateShoppingCart($_GET["IdProdotto"], $_SESSION["IdUtente"]);
?>