<?php
require '../index.php';

    try {
        $conn = new PDO('mysql:host='.$_ENV["HOST_BD"].';dbname='.$_ENV["NAME_DB"], $_ENV["USERNAME_DB"], $_ENV["PASSWORD_DB"]);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
?>