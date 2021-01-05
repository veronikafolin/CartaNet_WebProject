<!DOCTYPE html>
<html lang="it">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $templateParams["titolo"]; ?></title>
    <script src="js/functions.js"></script>
    <script type="text/javascript" src="js/hash.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css?ts=<?=time()?>&quot">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
</head>

<body>
    <header>
        <h1> <img src="./res/Icone/CartaNet.jpeg" alt="CartaNet" width="180px" height="150px"/> </h1>
        <div class="ReservedAreaButtons"> 
            <?php if( isUserLoggedIn() == 1 ): ?>
            <div class="dropdown" style="display:inline">
                    <button class="ReservedButton" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="mieiOrdini.php?IdUtente=<?php echo $_SESSION["IdUtente"]; ?>">I miei ordini</a>
                        <a class="dropdown-item" href="notifiche.php">I miei messaggi</a>
                    </div>
            </div>
            <?php endif ?>
            <?php if( isUserLoggedIn() == 1 ): ?>
            <a href="carrello.php?IdUtente=<?php echo $_SESSION["IdUtente"]; ?>"><button class="ReservedButton"><i class="fa fa-shopping-cart"></i></button></a>
            <?php endif ?>
            <?php if( isUserLoggedIn() == 0 ): ?>
            <a href="login.php"> <button class="ReservedButton"><i class="fa fa-sign-in"></i></button> </a>
            <?php endif ?>
            <?php if( isUserLoggedIn() != 0 ): ?>
            <a href="logout.php"> <button class="ReservedButton"><i class="fa fa-sign-out"></i></button> </a>
            <?php endif ?>
        </div>
    </header>

    <nav class="navbar navbar-expand navbar-light">
        <ul class="navbar-nav">
             <li class="nav-item active">
                <a class="nav-link" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./cancelleria.php">Cancelleria</a>
            </li>
            <li class="nav-item">
                 <a class="nav-link" href="./calendari.php">Calendari</a>
             </li>
            <li class="nav-item">
                <a class="nav-link" href="./agende.php">Agende</a>
            </li>
         </ul>
    </nav> 
    
    <main>
    <?php
        if(isset($templateParams["nomeFile"])){
             require($templateParams["nomeFile"]);
        }
    ?>
    </main>

    <footer>
        <p>  
            &#174 CartaNet S.r.l. <br>
            Via dell'Università, 50 47521 Cesena (FC)
        </p>
    </footer>

</body>
</html>