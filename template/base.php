<!DOCTYPE html>
<html lang="it">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $templateParams["titolo"]; ?></title>
    <?php
    if(isset($templateParams["js"])):
        foreach($templateParams["js"] as $script):
    ?>
        <script src="<?php echo $script; ?>"></script>
    <?php
        endforeach;
    endif;
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css"/> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <h1> <center> <img src="./res/Icone/CartaNet.jpeg" alt="CartaNet" width="180px" height="150px"/> </center> </h1>
        <div class="ReservedAreaButtons" style="float:right; margin: 0px 10px 10px 0px"> 
            <button style=" background-color: #6d6e71; border: none; color: white; padding: 12px 16px; font-size: 16px; cursor: pointer;" ><i class="fa fa-user"></i></button>
            <button style=" background-color: #6d6e71; border: none; color: white; padding: 12px 16px; font-size: 16px; cursor: pointer;" ><i class="fa fa-shopping-cart"></i></button>
            <a href="login.php"> <button style=" background-color: #6d6e71; border: none; color: white; padding: 12px 16px; font-size: 16px; cursor: pointer;" ><i class="fa fa-sign-in"></i></button> </a>
        </div>
    </header>

    <nav class="navbar navbar-expand-sm navbar-light" style="background-color:#a3ddf2; clear:both;">
        <ul class="navbar-nav">
             <li class="nav-item active">
                <a class="nav-link" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./cartoleria.php">Cartoleria</a>
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

    <footer style="text-align: center; border-top: 1px black solid; background-color: #a3ddf2;">
        <p style="margin-top: 10px">  
            &#174 CartaNet S.r.l. <br>
            Via dell'Università, 50 47521 Cesena (FC) <br>
            P.IVA 00000000000 <br>
            <nav>
                <ul class="nav justify-content-center" style="list-style: none">
                    <li class="nav-item"><a class="nav-link" style="color: black; text-decoration:underline;" href="../Home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" style="color: black; text-decoration:underline;" href="../InformativaPrivacy.php">Informativa Privacy</a></li>
                    <li class="nav-item"><a class="nav-link" style="color: black; text-decoration:underline;" href="../ChiSiamo.php">Chi siamo</a></li>
                </ul>
            </nav>
        </p>
    </footer>

</body>
</html>