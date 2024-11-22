<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE 5</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
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
            <li><a href="exo6.php">Exercice 6</a></li>
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
        <h1>EXERCICE 5</h1>
        <h1>Calcul du diamètre, périmètre et la surface d'un cercle</h1>
<form method="post">
<label for="rayon"><h3>Entrez le rayon du cercle :</h3></label>
<input type="number" id="rayon" name="rayon" min="0" step="0.01" required><Br>
<input type="submit" value="Calculer">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$rayon = (float) $_POST["rayon"];
$diametre = 2 * $rayon;
$perimetre = 2 * pi() * $rayon;
$surface = pi() * pow($rayon, 2);
echo "<div class='result'>";
echo "<h2>Résultats du calcul</h2>";
echo "<p>Rayon du cercle : <strong>$rayon</strong></p>";
echo "<p>Diamètre du cercle : <strong>$diametre</strong></p>";
echo "<p>Périmètre du cercle : <strong>" . round($perimetre, 2) . "</strong></p>";
echo "<p>Surface du cercle : <strong>" . round($surface, 2) . "</strong></p>";
echo "</div>";
}
?>
</main>
</body>
</html>