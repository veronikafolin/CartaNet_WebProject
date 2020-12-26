<?php
require_once("constants.php");

$totale = $db->CalculateTotale($_SESSION["IdUtente"]);
$IdOrdine = $db->insertOrdine($totale, $_SESSION["IdUtente"]);
$db->insertDettaglioOrdine($IdOrdine);
$db->updateProductAvailability($IdOrdine);
$db->resetShoppingCart($_SESSION["IdUtente"]);
$db->insertStatoOrdine($IdOrdine);

header("location:./index.php");
?>