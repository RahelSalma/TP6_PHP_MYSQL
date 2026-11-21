<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $produit = $_POST["produit"];
    $prix = $_POST["prix"];
    $quantite = $_POST["quantite"];
    $categorie = $_POST["categorie"];
    $total = $prix * $quantite;

    echo "<h2>Résultat :</h2>";
    echo "<p>Produit : " . htmlspecialchars($produit) . "</p>";
    echo "<p>Catégorie : " . htmlspecialchars($categorie) . "</p>";
    echo "<p>Prix : " . $prix . " DH</p>";
    echo "<p>Quantité : " . $quantite . "</p>";
    echo "<p>Total : " . $total . " DH</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calcul du prix</title>
</head>
<body>
    <h1>Formulaire Produit</h1>
    <form method="POST" action="">
        <label>Produit :</label>
        <input type="text" name="produit" required>
        <br><br>
        <label>Prix :</label>
        <input type="number" name="prix" required>
        <br><br>
        <label>Quantité :</label>
        <input type="number" name="quantite" required>
        <br><br>
        <label>Catégorie :</label>
        <input type="text" name="categorie" required>
        <br><br>
        <button type="submit">Calculer</button>
    </form>
</body>
</html>