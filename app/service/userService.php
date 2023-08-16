<?php

include "app/model/userModel.php";

class UserService{

    private $pdo;

    public function __construct()
    {
      $dbName = "advertising";
      $dbUser = "root";
      $dbPass = "mysql";
      $dsn = "mysql:host=localhost;dbname=". $dbName .";charset=utf8mb4";

      $this->pdo = new PDO($dsn, $dbUser, $dbPass);
    }

    public function getAllUsers()
    {                        
        $sql = "SELECT * FROM `users`";
        $query = $this->pdo -> query($sql);
        $rows = $query -> fetchAll(PDO::FETCH_ASSOC);
        $users = array();

        foreach($rows as $row){ 
            $user = new User($row["id"], $row["name"]);
            $users[] = $user;
        }

        return $users;
    }
}

?>