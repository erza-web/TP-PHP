<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE 14</title>
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
            <li><a href="exo15.php">Exercice 15</a></li>
            <li><a href="exo16.php">Exercice 16</a></li>
            <li><a href="exo17.php">Exercice 17</a></li>
        </ul>
    </aside>
    <main class="contenu">
        <h1>EXERCICE 14</h1>
        <form action="" method="POST">
        <label for=""><h3>Entrer le taux de la tva:</h3></label>
        <input type="number" step=0.01 name="t_tva" id="t_tva">
        <br>
        <label for=""><h3>Entrer le taux de le prix hors taxe:</h3></label>
        <input type="number" step=0.01 name="pht" id="t_tva">
        <br>
        <button type="submit"><h3>Envoyer</h3></button>
    </form>
    <?php
 if(isset($_POST["t_tva"])&& isset($_POST["pht"])){
    $t_tva=$_POST["t_tva"];
    $php=$_POST["pht"];
    $TVA=($t_tva*$php)/100;
    $pttc=$TVA+$php;
    echo"<label for=''>TVA</label>";
    echo"<br>";
    echo"<input type='number' value='".number_format($TVA,2)."' readonly > euros";
        echo"<br>";
        echo"<br>";
    echo"<label for=''>Prix toutes taxes comprises</label>";
    echo"<br>";
    echo"<input type='number' value='".number_format($pttc,2)."' readonly > euros";
    }
?>
</main>
</body>
</html>