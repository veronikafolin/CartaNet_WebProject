<?php
    //session_start();
    
    require_once("functions.php");
    sec_session_start();
    require_once("DataBaseHelper.php");
    //$db = new DataBaseHelper("localhost", "root", "", "CartaNetDB", 3306);
    $db = new DataBaseHelper("localhost", "cartanetADMIN", "16ed21d98d6973ae22d5aa4caf1edc24956252f3be0ab102427d3679aca3ddb6", "CartaNetDB", 3306);
?>