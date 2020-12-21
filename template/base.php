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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <h1> <center> <img src="./res/Icone/CartaNet.jpeg" alt="CartaNet" width="180px" height="150px"/> </center> </h1>
        <div class="ReservedAreaButtons"> 
            <!-- Aggiungere icone con php tramite template params -->
        </div>
    </header>

    <nav class="navbar navbar-expand-sm bg-light navbar-light">
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

    <footer>
        <p>
            &#174 CartaNet S.r.l. <br>
            Via dell'Università,50 47521 Cesena (FC) <br>
            P.IVA 00000000000 <br>
            <nav>
                <ul>
                    <li><a href="../Home.php">Home</a></li>
                    <li><a href="../InformativaPrivacy.php">Informativa Privacy</a></li>
                    <li><a href="../ChiSiamo.php">Chi siamo</a></li>
                </ul>
            </nav>
        </p>
    </footer>

</body>
</html>