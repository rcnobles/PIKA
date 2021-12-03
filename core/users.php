<?php

class Users{
    private $conn;
    private $table = 'registration';

    public $id;
    public $userName;
    public $email;
    public $password;
    public $confirmPass;

    public function __construct($db){
        $this->conn = $db;
    }
    public function read(){
        $query = 'SELECT
            *
            FROM
            ' .$this->table;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function read_single(){
        $query = 'SELECT
            *
            FROM
            ' .$this->table . ' p 
            LEFT JOIN
                user c ON p.id = c.id
                WHERE p.id = ? LIMIT 1';

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->userName = $row['userName'];
        $this->email = $row['email'];
        $this->password = $row['password'];
        $this->confirmPass = $row['confirmPass'];
    }

    public function create(){
        $query = 'INSERT INTO ' . $this->table . ' SET userName = :userName, email = :email, password = :password, confirmPass = :confirmPass';
        // prepare statement
        $stmt = $this->conn->prepare($query);
        // clean data
        $this->userName     = htmlspecialchars(strip_tags($this->userName));
        $this->email        = htmlspecialchars(strip_tags($this->email));
        $this->password     = htmlspecialchars(strip_tags($this->password));
        $this->confirmPass  = htmlspecialchars(strip_tags($this->confirmPass));

        $stmt->bindParam(':userName', $this->userName);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':confirmPass', $this->confirmPass);

        if($stmt->execute()){
            return true;
        }

        printf("Error %s. \n", $stmt->error);
        return false;
    }

    public function deleteUser(){
        $query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';
        $stmt = $this->conn->prepare($query);
        $this->id;
        $stmt->bindParam(':id', $this->id);
        
        if($stmt->execute()){
            return true;
        }
        printf("Error %s. \n", $stmt->error);
        return false;
    }
}

?>