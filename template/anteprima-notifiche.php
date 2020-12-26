<?php if( count($templateParams["notifiche"]) == 0 ): ?>
<p> Nessuna notifica presente </p>
<?php else: ?>
    <?php foreach( $templateParams["notifiche"] as $notifica):?>
        <article>
            <header>
                <?php if($notifica["Letto"] == 0): ?>
                    <h2 style="color: red;"> Notifica <?php echo $notifica["IdNotifica"]?> </h2>
                <?php else: ?>
                    <h2> Notifica <?php echo $notifica["IdNotifica"]?> </h2>
                <?php endif ?>
                <p>Data: <?php echo $notifica["Data"]?> </p>
            </header>

            <section>
                <?php echo $notifica["Oggetto"]?>
                <a href='./template/notifica.php?IdNotifica=<?php echo $notifica["IdNotifica"] ?>' > <button name="Leggi notifica"> Leggi notifica </button></a>
            </section>
        </article>
    <?php endforeach ?>
<?php endif ?>