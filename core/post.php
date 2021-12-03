<?php

class Post{
    private $conn;
    private $table = 'allergy';

    public $id;
    public $inAllergy;
    public $product;
    public $symptoms;

    public function __construct($db){
        $this->conn = $db;
    }
    public function read(){
        $query = 'SELECT
            p.id,
            p.inAllergy,
            p.product,
            p.symptoms
            FROM
            ' .$this->table . ' p 
            LEFT JOIN
                user c ON p.id = c.id
                ORDER BY p.id ASC';

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function read_single(){
        $query = 'SELECT
            p.id,
            p.inAllergy,
            p.product,
            p.symptoms
            FROM
            ' .$this->table . ' p 
            LEFT JOIN
                user c ON p.id = c.id
                WHERE p.id = ? LIMIT 1';

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->inAllergy = $row['inAllergy'];
        $this->product = $row['product'];
        $this->symptoms = $row['symptoms'];
    }
}
?>