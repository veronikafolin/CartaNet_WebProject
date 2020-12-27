<?php
    session_start();
    require_once("functions.php");
    require_once("DataBaseHelper.php");
    $db = new DataBaseHelper("localhost", "root", "", "CartaNetDB", 3306);
?>