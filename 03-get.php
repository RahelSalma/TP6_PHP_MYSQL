<?php

$nom = $_GET["nom"] ?? "Inconnu";
$ville = $_GET["ville"] ?? "Non précisée";

echo "<h1>Informations reçues</h1>";

echo "<p>Nom : " . htmlspecialchars($nom) . "</p>";

echo "<p>Ville : " . htmlspecialchars($ville) . "</p>";

?>