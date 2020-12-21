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
</head>

<body>
    <header>
        <h1> <img src="./res/Icone/CartaNet.jpeg" alt="CartaNet"/> </h1>
        <div class="ReservedAreaButtons"> 
            <!-- Aggiungere icone con php tramite template params -->
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="../Home.php">Home</a></li>
            <li><a href="../Cartoleria.php">Cartoleria</a></li>
            <li><a href="../Calendari.php">Calendari</a></li>
            <li><a href="../Agende.php">Agende</a></li>
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