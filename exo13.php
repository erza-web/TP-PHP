<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 13</title>
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
            <li><a href="exo14.php">Exercice 14</a></li>
            <li><a href="exo15.php">Exercice 15</a></li>
            <li><a href="exo16.php">Exercice 16</a></li>
            <li><a href="exo17.php">Exercice 17</a></li>
        </ul>
    </aside>
    <main class="contenu">
        <h1>EXERCICE 13</h1>
        <form action="" method="POST">
        <label for=""><h3>Entrer le nombre d'entiers que vous voulez saisir:</h3></label>
        <input type="number" name="nombre" id="nombre">
        <br>
        <button type="submit">Envoyer</button>
    </form>
    <?php
if(isset($_POST["nombre"])){
    $nombre=intval($_POST["nombre"]);
    $i;
    $tab=[];
    echo"<form action='' method='POST'>";
    for($i=0;$i<$nombre;$i++){
        echo"<label for='nombre$i'><h3>Entrer le nombre numéro ".($i+1).":</h3></label>";
        echo"<input type='number' name='tab[]' required>";
        echo"<br>";
    }
    echo"<button type='submit'><h3>Envoyer</h3></button>";
    echo"</form>";
}
    if(isset($_POST["tab"])){
        $tab=$_POST["tab"];
        $somme=array_sum($tab);
        $moy=$somme/count($tab);
        $minimum=min($tab);
        $maximum=max($tab);
        echo"La moyenne des entiers du tableau est: ".$moy."<br>";
        echo"Le minimum du tableau est: ".$minimum."<br>";
        echo"Le maximum du tableau est: ".$maximum."<br>";
    }
?>
</main>
</body>
</html>