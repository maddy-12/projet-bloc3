<?php

// Connexion à la base de données
$host = "localhost";
$db_name = "biocook_2";
$username = "root";
$password = "";
$connexion;

$connexion = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
