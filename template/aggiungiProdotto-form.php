<div class="row justify-content-center align-items-center" style="margin: 20px 0">
    <form action="aggiungi.php" method="post" style="margin-top: 20px"> 
        <h2 style="font-size: 16pt; align: center">Aggiungi un nuovo prodotto</h2>
        <div class="form-group col-10">
            <label for="NomeArticolo">Nome articolo:</label>
            <input class="form-control" type="text" id="NomeArticolo" name="NomeArticolo" required/>
        </div>
        <div class="form-group col-10">
            <label for="Descrizione">Descrizione:</label>
            <input class="form-control" type="text" id="Descrizione" name="Descrizione" required/> <!-- Prova textarea -->
        </div>
        <div class="form-group col-10">
            <label for="Prezzo">Prezzo (in €):</label>
            <input class="form-control" type="text" id="Prezzo" name="Prezzo" required/>
        </div>
        <div class="form-group col-10">
            <label for="Disponibilità">Disponibilità:</label>
            <input class="form-control" type="number" id="Disponibilità" name="Disponibilità" required/>
        </div>
        <div class="form-group col-10">
            <label for="Categoria">Categoria:</label>
            <select name="Categoria" id="Categoria" required>
                <option value="Cancelleria"> Cancelleria </option>
                <option value="Calendari"> Calendari </option>
                <option value="Agende"> Agende </option>
            </select>
        </div>
        <div class="form-group col-10">
            <label for="Immagine">Immagine:</label>
            <input class="form-control" type="file" id="Immagine" name="Immagine" required/>
        </div>
        <div class="form-group col-4 " >
        <input class="btn btn-primary" id="add" type="submit" name="add" value="Aggiungi prodotto"/>
        </div>
    </form>
</div>