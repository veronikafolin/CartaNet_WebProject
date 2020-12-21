<div class="search-container">
    <form action="searchResults.php">
      <input type="text" placeholder="Search.." name="search"/>
      <input type="submit" name="serachButton" value="Go"/>
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