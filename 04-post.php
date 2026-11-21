<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = $_POST["nom"] ?? "";
    $age = $_POST["age"] ?? "";
    $ville = $_POST["ville"] ?? "";

    echo "<h2>Informations reçues :</h2>";

    echo "<p>Nom : " . htmlspecialchars($nom) . "</p>";
    echo "<p>Age : " . htmlspecialchars($age) . "</p>";
    echo "<p>Ville : " . htmlspecialchars($ville) . "</p>";

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulaire POST</title>
</head>

<body>

    <h1>Formulaire d'inscription</h1>

    <form method="POST" action="">

        <label>Nom :</label>
        <input type="text" name="nom">
        <br><br>

        <label>Age :</label>
        <input type="number" name="age">
        <br><br>

        <label>Ville :</label>
        <input type="text" name="ville">
        <br><br>

        <button type="submit">Envoyer</button>

    </form>

</body>
</html>