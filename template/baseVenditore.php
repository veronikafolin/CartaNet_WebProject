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
    <link rel="stylesheet" type="text/css" href="./css/style.css"/> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <h1> <center> <img src="./res/Icone/CartaNet.jpeg" alt="CartaNet" width="180px" height="150px"/> </center> </h1>
            <?php if( isUserLoggedIn() == 2 ): ?>
            <a href="logout.php" style="float:right; margin: 0 10px 10px 0"> <button style=" background-color: #6d6e71; border: none; color: white; padding: 12px 16px;  font-size: 16px; cursor: pointer;" ><i class="fa fa-sign-out"></i></button> </a>
            <?php endif ?>
        </div>
    </header>

    <nav class="navbar navbar-expand-sm navbar-light" style="background-color:#a3ddf2; clear:both;">
        <ul class="navbar-nav">
             <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./gestioneprodotti.php">Gestione prodotti</a>
            </li>
            <li class="nav-item">
                 <a class="nav-link" href="#">Gestione ordini</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="notifiche.php">Le mie notifiche</a>
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

    <footer style="text-align: center; border-top: 1px black solid; background-color: #a3ddf2; padding: 10px 0px;">
        <p style="margin-top: 10px">  
            &#174 CartaNet S.r.l. <br>
            Via dell'Università, 50 47521 Cesena (FC)
        </p>
    </footer>

</body>
</html>