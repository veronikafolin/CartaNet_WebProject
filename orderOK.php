<?php
require_once("constants.php");

$IdOrdine = $db->insertOrdine($_SESSION["IdUtente"]);
$db->insertDettaglioOrdine($IdOrdine);
$db->resetShoppingCart($_SESSION["IdUtente"]);
$db->insertStatoOrdine($IdOrdine);

header("location:./index.php");
?>