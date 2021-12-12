<?php

try {
    //connection to DB
   $db = NEW PDO('mysql:host=localhost; dbname=biocook', 'root','');

} catch (PDOException $e) {
    echo 'error' . $e -> getmessage();
}

?>