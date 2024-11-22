<!DOCTYPE html> 
<html lang="en"> 
<head>     
    <meta charset="UTF-8">     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    <title>EXERCICE 17</title>
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
            <li><a href="exo8.php">Exercice 8</a></li>
            <li><a href="exo9.php">Exercice 9</a></li>
            <li><a href="exo10.php">Exercice 10</a></li>
            <li><a href="exo11.php">Exercice 11</a></li>
            <li><a href="exo12.php">Exercice 12</a></li>
            <li><a href="exo13.php">Exercice 13</a></li>
            <li><a href="exo14.php">Exercice 14</a></li>
            <li><a href="exo15.php">Exercice 15</a></li>
            <li><a href="exo16.php">Exercice 16</a></li>
        </ul>
    </aside>
    <main class="contenu">
        <h1>EXERCICE 17</h1>
        <h1>Calcul du Sinus</h1>     
    <form action="" method="POST">         
        <label for="angle"><h3>Entrez l'angle :</h3></label>         
        <input type="number" step="any" name="angle" id="angle" required>         
        <br>
        <br>         
        <label for="unite"><h3>Choisissez l'unité :</h3></label>         
        <select name="unite" id="unite">             
            <option value="r">Radian</option>             
            <option value="d">Degré</option>             
            <option value="g">Grade</option>         
        </select>         
        <br>
        <br>         
        <button type="submit">Calculer</button>     
    </form>
<?php     
    function calculerSinus($angle, $unite = 'r') {         
        switch (strtolower($unite)) {             
            case 'r':                 
            return sin($angle);             
            case 'd':                 
            return sin(deg2rad($angle));             
            case 'g':                 
            $angleEnRadian = deg2rad($angle * 0.9);                 
            return sin($angleEnRadian);             
            default:                 
            return "Unité non reconnue. Utilisez 'r' pour radians, 'd' pour degrés, ou 'g' pour grades.";         
            }     
        }     
        if ($_SERVER["REQUEST_METHOD"] === "POST") {         
            $angle = isset($_POST['angle']) ? (float) $_POST['angle'] : 0;         
            $unite = isset($_POST['unite']) ? $_POST['unite'] : 'r';         
            $resultat = calculerSinus($angle, $unite);         
            echo "<h2>Résultat</h2>";         
            echo "<p>Le sinus de $angle avec l'unité '$unite' est : $resultat</p>";     
            }     
?> 
</main>
</body>
</html>          