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

        $statement = $this->db->prepare("SELECT Immagine, NomeProdotto, Prezzo FROM Prodotto LIMIT ?");
        $statement->bind_param('i', $n);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}

?>