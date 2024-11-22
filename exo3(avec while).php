<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tirage aléatoire </title>
<link rel="stylesheet" href="style/style.css">
</head>
<body>
<aside class="barre">
        <h2>Liste d'exercices</h2>
        <ul>
            <li><a href="exo1.php">Exercice 1</a></li>
            <li><a href="exo2.php">Exercice 2</a></li>
            <li><a href="exo3(avec for).php">Exercice 3(avec for)</a></li>
            <li><a href="exo4.php">Exercice 4</a></li>
            <li><a href="exo5.php">Exercice 5</a></li>
            <li><a href="exo6.php">Exercice 6</a></li>
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
    <h1>EXERCICE 3</h1>
<h1>Simulation de tirages aléatoires</h1>
<form method="post" action="">
<label for="nombre"><h3>Entrez un nombre de trois chiffres (100-999) :</h3></label>
<input type="number" id="nombre" name="nombre" min="100" max="999" required><br>
<button type="submit">Lancer les tirages</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$nombre_initial = intval($_POST['nombre']);
if ($nombre_initial >= 100 && $nombre_initial <= 999) {
$nombre_tirages = 0;
$tirage = -1;
// Boucle while pour effectuer les tirages
while ($tirage !== $nombre_initial) {
$tirage = rand(100, 999);
$nombre_tirages++;
}
echo "<p>Le nombre initial était : <strong>$nombre_initial</strong>.</p>";
echo "<p>Il a fallu <strong>$nombre_tirages</strong> tirages pour obtenir ce nombre.</p>";
} else {
echo "<p>Veuillez entrer un nombre valide entre 100 et 999.</p>";
}
}
?>
</body>
</html>
</main>
</body>
</html>