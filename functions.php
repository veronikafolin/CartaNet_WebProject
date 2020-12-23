<?php
    function registerLoggedUser($user){
        $_SESSION["IdUtente"] = $user["IdUtente"];
        $_SESSION["Email"] = $user["Email"];
        $_SESSION["Nome"] = $user["Nome"];
        $_SESSION["Tipo"] = $user["Tipo"];
    }

    function isUserLoggedIn(){
        $logged = 0;
        if(!empty($_SESSION['IdUtente'])){
            if($_SESSION['Tipo'] == 'Cliente') $logged = 1;
            if($_SESSION['Tipo'] == 'Venditore') $logged = 2;
        }
        return $logged;
    }

?>