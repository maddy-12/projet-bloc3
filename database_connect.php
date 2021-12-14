<?php

try {
    //connection to DB
    $db = new PDO('mysql:host=localhost; dbname=biocook', 'root', '');
    $db->exec('SET NAMES "UTF8"');
} catch (PDOException $e) {
    echo 'error' . $e->getmessage();
    die();
}
