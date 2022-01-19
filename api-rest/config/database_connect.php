<?php

class Database
{
    // Connexion à la base de données
    private $host = "localhost";
    private $db_name = "biocook";
    private $username = "root";
    private $password = "";
    public $connexion;


    //getter pour la connexion
    public function getConnection()
    {
        $this->connexion = null;
        try {
            $this->connexion =
                new PDO("mysql:host=" . $this->host. ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->connexion->exec('SET NAMES "UTF8"');
        } catch (PDOException $exception) {
            echo "Erreur de connexion : " . $exception->getmessage();
        }
        return $this->connexion;
    }
}
