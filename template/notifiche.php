<section>
    <h2>Le mie notifiche</h2>
    <div class="container-fluid">
        <?php if( count($templateParams["notifiche"]) == 0 ): ?>
        <p> Nessuna notifica presente </p>
        <?php else: ?>
            <?php foreach( $templateParams["notifiche"] as $notifica):?>
                <div class="row notifica justify-content-center align-items-center"> 
                    <div class="col-12 col-xl-9">
                        <?php if($notifica["Letto"] == 0): ?>
                            <p class="daLeggere"> <?php echo $notifica["Oggetto"]?> </p>
                        <?php else: ?>
                            <p> <?php echo $notifica["Oggetto"] ?>  </p>
                        <?php endif ?>
                        <p>Data: <?php echo $notifica["Data"]?> </br>
                        <?php echo $notifica["Testo"]?> </p>
                    </div>
                    <div class="col-12 col-xl-3">
                    <a href="leggiNotifica.php?IdNotifica=<?php echo $notifica["IdNotifica"]; ?>" > <button type="button" class="form-control btn btn-primary" name="SegnaLetta"> Segna come letta </button> </a>
                    </div>
                </div>
            <?php endforeach ?>
        <?php endif ?>
    </div>
</section>