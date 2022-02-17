<?php

// Connexion à la base de données
$host = "localhost";
$db_name = "biocook";
$username = "root";
$password = "IVY18021994kimi";
$connexion;

$connexion = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
