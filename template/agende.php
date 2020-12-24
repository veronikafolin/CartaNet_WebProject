<section>
    <div class="search-container" id="searchBar" style="float: right; margin:10px 10px 0px 0px;">
        <form class="form-inline" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Cerca...">
            <button class="btn" type="submit" style="background-color: #6d6e71; color: white">Vai</button>
        </form>
    </div>
</section>

<section style="margin: 80px; clear: both;">
    <center><h2>Agende</h2></center>
    <div class="container-fluid">
        <div class="row" style="width: 100%"> 
            <?php foreach($templateParams["prodottiAgende"] as $prodotto): ?>
                <div class="col-sm-6 col-xl-2" style="padding: 0px">
                <a href="prodotto.php?IdProdotto=<?php echo $prodotto["IdProdotto"]; ?>">
                    <center><img src="<?php echo ".".$prodotto["Immagine"];?>" alt="<?php echo "Immagine di ".$prodotto["NomeProdotto"];?>" width="100" height="100"/>
                    <h3 style="font-size: 16pt"> <?php echo $prodotto["NomeProdotto"]; ?> </h3>
                </a>
                    <p style="font-weight: bold"> <?php echo $prodotto["Prezzo"]." €" ; ?></p> </center>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

