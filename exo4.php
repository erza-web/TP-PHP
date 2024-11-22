<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE 4</title>
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
        <h1>EXERCICE 4</h1>
        <h1>Calculateur de PPCM</h1>
<form method="post">
<label for="num1"><h3>Entrez le premier nombre :</h3></label>
<input type="number" id="num1" name="num1" required>
<br><br>
<label for="num2"><h3>Entrez le premier nombre :</h3></label>
<input type="number" id="num2" name="num2" required>
<br><br>
<button type="submit">Calculer le PPCM</button>
</form>
<?php
function calculerPGCD($a, $b) {
while ($b != 0) {
$reste = $a % $b;
$a = $b;
$b = $reste;
}
return abs($a);
}
function calculerPPCM($a, $b) {
$pgcd = calculerPGCD($a, $b);
return abs($a * $b) / $pgcd;
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$num1 = intval($_POST["num1"]);
$num2 = intval($_POST["num2"]);

if ($num1 > 0 && $num2 > 0) {
$ppcm = calculerPPCM($num1, $num2);
echo "<p>Le PPCM de $num1 et $num2 est : $ppcm</p>";
} else {
echo "<p>Veuillez entrer des entiers positifs.</p>";
}
}
?>
</main>
</body>
</html>