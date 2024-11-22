<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE 11</title>
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
            <li><a href="exo12.php">Exercice 12</a></li>
            <li><a href="exo13.php">Exercice 13</a></li>
            <li><a href="exo14.php">Exercice 14</a></li>
            <li><a href="exo15.php">Exercice 15</a></li>
            <li><a href="exo16.php">Exercice 16</a></li>
            <li><a href="exo17.php">Exercice 17</a></li>
        </ul>
    </aside>
    <main class="contenu">
    <h1>EXERCICE 11</h1>
    <h2>SAISISSEZ LA DATE</h2>
    <form action="" method="POST">
        <label for=""><h3>Entrer le jour:</h3></label>
        <input type="number" name="jour" id="jour">
        <br>
        <label for=""><h3>Entrer le mois:</h3></label>
        <input type="text" name="mois" id="mois">
        <br>
        <label for=""><h3>Entrer l'année:</h3></label>
        <input type="number" name="annee" id="annee">
        <br>
        <button type="submit"><h3>Envoyer</h3></button>
    </form>
<?php
 $mois=[
    "janvier"=>31,
    "Fevrier"=>28,
    "Mars"=>31,
    "Avril"=>30,
    "Mai"=>31,
    "juin"=>30,
    "juillet"=>31,
    "Aout"=>31,
    "Septembre"=>30,
    "Octobre"=>31,
    "Novembre"=>30,
    "Decembre"=>31,
 ];
 if(isset($_POST["jour"]) && isset($_POST["mois"]) && isset($_POST["annee"])){
    $jour=$_POST["jour"];
    $m=strtolower(trim($_POST["mois"]));
    $annee=$_POST["annee"];
    $parcouru=0;
    if(!array_key_exists($m,$mois)){
        echo"Erreur Le mois est mal écrit";
    }
    else{ 
    foreach($mois as $jourDmois => $valeur){
        if($jourDmois==$m){
            break;
        }
        $parcouru=$parcouru+$jourDmois;
    }
    $parcouru=$parcouru+$jour;
    $rest=365-$parcouru;
    echo"Il vous reste ".$rest." jours dans l'année. Si vous avez des projets. FAITES VITE!!!!";
}
}
?>
   </main>
</body>
</html>