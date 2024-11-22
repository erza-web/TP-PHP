<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE 8</title>
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
            <li><a href="exo6.php">Exercice 6</a></li>
            <li><a href="exo7.php">Exercice 7</a></li>
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
        <h1>EXERCICE 8</h1>
        <h1>Calcul de la moyenne, du maximum et du minimum</h1>
<form method="post">
<label for="tableau"><h3>Entrez des nombres entiers séparés par des virgules :</h3></label><br>
<input type="text" id="tableau" name="tableau" placeholder="Exemple : 5,10,15,20" required> <br>
<input type="submit" value="Calculer">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$input = $_POST["tableau"];
$tableau = array_map('intval', explode(',', $input));
// Calculer la moyenne
$somme = array_sum($tableau);
$nombreElements = count($tableau);
$moyenne = $somme / $nombreElements;
// Trouver le maximum et le minimum
$maximum = max($tableau);
$minimum = min($tableau);
echo "<div class='result'>";
echo "<h2>Résultats</h2>";
echo "<p>Tableau des nombres : <strong>" . implode(', ', $tableau) . "</strong></p>";
echo "<p>Moyenne : <strong>" . round($moyenne, 2) . "</strong></p>";
echo "<p>Maximum : <strong>$maximum</strong></p>";
echo "<p>Minimum : <strong>$minimum</strong></p>";
echo "</div>";
}
?>
</main>
</body>
</html>