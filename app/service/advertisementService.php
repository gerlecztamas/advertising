<?php

include "app/model/advertisementModel.php";
include "app/model/userModel.php";

class AdvertisementService{

    private $pdo;

    public function __construct()
    {
        /* change to your own settings at will */
        $dbName = "advertising";
        $dbUser = "root";
        $dbPass = "mysql";
        $dsn = "mysql:host=localhost;dbname=". $dbName .";charset=utf8mb4";

        $this->pdo = new PDO($dsn, $dbUser, $dbPass);
    }

    public function getAllAdvertisements()
    {                        
        $sql = "SELECT users.id, users.name, advertisements.title, advertisements.id AS \"advertisementid\", advertisements.userid FROM advertisements INNER JOIN users ON advertisements.userid = users.id;";
        $query = $this->pdo -> query($sql);
        $rows = $query -> fetchAll(PDO::FETCH_ASSOC);
        $advertisments = array();

        foreach($rows as $row){ 
            $user = new User($row["id"], $row["name"]);
            $advertisment = new Advertisement($row["advertisementid"], $user, $row["title"]);
            $advertisments[] = $advertisment;
        }

        return $advertisments;
    }
}

?>