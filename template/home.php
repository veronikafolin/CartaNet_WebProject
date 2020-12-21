<div class="search-container" style="float: right">
    <form class="form-inline" action="/action_page.php">
        <input class="form-control mr-sm-2" type="text" placeholder="Cerca...">
        <button class="btn" type="submit" style="background-color: #a3ddf2">Vai</button>
    </form>
</div>

<section>
    <h2>Potrebbe interessarti</h2>
    <?php foreach($templateParams["prodotti"] as $prodotto): ?>
        <div>
            <img src=<?php echo ".".$prodotto["Immagine"];?> alt=<?php echo "Immagine di ".$prodotto["NomeProdotto"];?> width="100" height="100"/>
            <h3> <?php echo $prodotto["NomeProdotto"]; ?> </h3>
            <p> <?php echo $prodotto["Prezzo"]." €" ; ?></p>
        </div>
    <?php endforeach; ?>
</section>

<section>

    <div>
        <img src="./res/Icone/Spedizioni.jpg" alt=""/> 
        <p>Spedizioni gratuite*</p> 
        <p>*Per ordini superiori ai 15€</p>
    </div>

    <div>
        <img src="./res/Icone/Pagamenti.jpg" alt=""/> 
        <p>Pagamenti sicuri</p>
    </div>

    <div>
        <img src="./res/Icone/Resi.jpg" alt=""/>
        <p>Resi facili</p>
    </div>

</section>