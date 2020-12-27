<?php
require_once("constants.php");

$db->updateStatoOrdine($_POST["StatoOrdine"], $_GET["IdOrdine"]);

header("location:./gestioneordini.php");
?>