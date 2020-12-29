
<?php if( count($templateParams["notifiche"]) == 0 ): ?>
<p> Nessuna notifica presente </p>
<?php else: ?>
    <?php foreach( $templateParams["notifiche"] as $notifica):?>
        <article>
            <header>
                <?php if($notifica["Letto"] == 0): ?>
                    <h2 style="color: red;"> <?php echo $notifica["Oggetto"]?> </h2>
                <?php else: ?>
                    <h2> <?php echo $notifica["Oggetto"] ?>  </h2>
                <?php endif ?>
                <p>Data: <?php echo $notifica["Data"]?> </p>
            </header>

            <section>
                <?php echo $notifica["Testo"]?>
                <a href="leggiNotifica.php?IdNotifica=<?php echo $notifica["IdNotifica"]; ?>" > <button name="SegnaLetta"> Segna come letta </button> </a>
            </section>
        </article>
    <?php endforeach ?>
<?php endif ?>
