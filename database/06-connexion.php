<?php

$host = "localhost";
$dbname = "tp_php";
$username = "root";
$password = "";
try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $username,
        $password
    );
    echo "Bravo ! Ma connexion fonctionne.";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
