<?php

    require_once("constants.php");
    $db->setRead($_GET["IdNotifica"]);
    header("location:./notifiche.php");
?>