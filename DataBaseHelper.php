<?php
class DatabaseHelper{
    private $db;

    public function __construct($servername, $username, $password, $dbname, $port){
        $this->db = new mysqli($servername, $username, $password, $dbname, $port);
        if ($this->db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }        
    }

    public function getProducts($n){

        $statement = $this->db->prepare("SELECT IdProdotto,Immagine, NomeProdotto, Prezzo FROM Prodotto LIMIT ?");
        $statement->bind_param('i', $n);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProductsFromCategory($category){

        $statement = $this->db->prepare("SELECT IdProdotto, Immagine, NomeProdotto, Prezzo FROM Prodotto WHERE Categoria=?");
        $statement->bind_param('s', $category);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProductById($n){

        $statement = $this->db->prepare("SELECT Immagine, NomeProdotto, Descrizione, Prezzo FROM Prodotto WHERE IDProdotto=?");
        $statement->bind_param('i', $n);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC)[0];
    }

    public function isProductAvailable($n){

        $statement = $this->db->prepare("SELECT QuantitàResidua FROM Prodotto WHERE IdProdotto=?");
        $statement->bind_param('i', $n);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC)[0]["QuantitàResidua"];
    }
}

?>