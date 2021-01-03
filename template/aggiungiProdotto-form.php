<section > 
    <h2>Aggiungi un nuovo prodotto</h2>
    <div class="row justify-content-center align-items-center">
        <form action="aggiungi.php" method="post"> 
                <div class="form-group">
                    <label for="NomeArticolo">Nome articolo:</label>
                    <input class="form-control" type="text" id="NomeArticolo" name="NomeArticolo" required/>
                </div>
                <div class="form-group">
                    <label for="Descrizione">Descrizione:</label>
                    <textarea class="form-control" rows="5" type="text" id="Descrizione" name="Descrizione" required> </textarea> 
                </div>
                <div class="form-group">
                    <label for="Prezzo">Prezzo (in €):</label>
                    <input class="form-control" type="number" step="0.01" id="Prezzo" name="Prezzo" required/>
                </div>
                <div class="form-group">
                    <label for="Disponibilità">Disponibilità:</label>
                    <input class="form-control" type="number" id="Disponibilità" name="Disponibilità" required/>
                </div>
                <div class="form-group">
                    <label for="Categoria">Categoria:</label>
                    <select name="Categoria" id="Categoria" required>
                        <option value="Cancelleria"> Cancelleria </option>
                        <option value="Calendari"> Calendari </option>
                        <option value="Agende"> Agende </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Immagine">Immagine:</label>
                    <input class="form-control" type="file" id="Immagine" name="Immagine" required/>
                </div>
                <div class="form-group">
                <input class="form-control btn btn-primary" id="add" type="submit" name="add" value="Aggiungi prodotto"/>
                </div>
            </form>
    </div>
</section>

