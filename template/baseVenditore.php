<!DOCTYPE html>
<html lang="it">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $templateParams["titolo"]; ?></title>
    <script src="js/functions.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css?ts=<?=time()?>&quot">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <h1> <img src="./res/Icone/CartaNet.jpeg" alt="CartaNet" width="180px" height="150px"/> </h1>
        <?php if( isUserLoggedIn() == 2 ): ?>
            <div class="ReservedAreaButtons"> 
                <a href="logout.php"> <button class="ReservedButton"><i class="fa fa-sign-out"></i></button> </a>
            </div>
        <?php endif ?>
    </header>

    <nav class="navbar navbar-expand navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="./login.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./gestioneprodotti.php">Prodotti</a>
            </li>
            <li class="nav-item">
                 <a class="nav-link" href="./gestioneordini.php">Ordini</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="notifiche.php">Notifiche</a>
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