<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE 6</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<aside class="barre">
        <h2>Liste d'exercices</h2>
        <ul>
            <li><a href="exo1.php">Exercice 1</a></li>
            <li><a href="exo2.php">Exercice 2</a></li>
            <li><a href="exo3(avec while).php">Exercice 3(avec while)</a></li>
            <li><a href="exo3(avec for).php">Exercice 3(avec for)</a></li>
            <li><a href="exo4.php">Exercice 4</a></li>
            <li><a href="exo5.php">Exercice 5</a></li>
            <li><a href="exo7.php">Exercice 7</a></li>
            <li><a href="exo8.php">Exercice 8</a></li>
            <li><a href="exo9.php">Exercice 9</a></li>
            <li><a href="exo10.php">Exercice 10</a></li>
            <li><a href="exo11.php">Exercice 11</a></li>
            <li><a href="exo12.php">Exercice 12</a></li>
            <li><a href="exo13.php">Exercice 13</a></li>
            <li><a href="exo14.php">Exercice 14</a></li>
            <li><a href="exo15.php">Exercice 15</a></li>
            <li><a href="exo16.php">Exercice 16</a></li>
            <li><a href="exo17.php">Exercice 17</a></li>
        </ul>
    </aside>
    <main class="contenu">
        <h1>EXERCICE 7</h1>
        <h1>Vérifier si un nombre est parfait</h1>
<form method="post">
<label for="nombre"><h3>Entrez un nombre entier :</h3></label>
<input type="number" id="nombre" name="nombre" min="1" required><br>
<input type="submit" value="Tester">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nombre = (int) $_POST["nombre"];
$sommeDiviseurs = 0;
for ($i = 1; $i < $nombre; $i++) {
if ($nombre % $i == 0) {
$sommeDiviseurs += $i;
}
}
echo "<div class='result'>";
echo "<h3>Résultat</h3>";
if ($sommeDiviseurs == $nombre) {
echo "<p>Le nombre <strong>$nombre</strong> est un <strong>nombre parfait</strong>.</p>";
} else {
echo "<p>Le nombre <strong>$nombre</strong> n'est pas un nombre parfait.</p>";
}
echo "</div>";
}
?>
</main>
</body>
</html>