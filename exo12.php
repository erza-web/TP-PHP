<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 12</title>
    <link rel="stylesheet" href="style/style2.css">
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
            <li><a href="exo13.php">Exercice 13</a></li>
            <li><a href="exo14.php">Exercice 14</a></li>
            <li><a href="exo15.php">Exercice 15</a></li>
            <li><a href="exo16.php">Exercice 16</a></li>
            <li><a href="exo17.php">Exercice 17</a></li>
        </ul>
    </aside>
    <main class="contenu">
    <h1>EXERCICE 12</h1>
    <h1>Adresse Client</h1>
    <form action="" method="POST">
     <label for=""><h3>Entrer votre nom:</h3></label>
     <input type="text" name="nom" id="nom">
     <br>
     <label for=""><h3>Entrer votre prenom:</h3></label>
     <input type="text" name="prenom" id="prenom">
     <br>
     <label for=""><h3>Entrer votre adresse:</h3></label>
     <input type="text" name="adresse" id="adresse">
     <br>
     <label for=""><H3>Entrer votre ville:</H3></label>
     <input type="text" name="ville" id="ville">
     <br>
     <label for=""><h3>Entrer votre code postal:</h3></label>
     <input type="text" name="code" id="code">
     <br>
     <button type="submit"><h3>Envoyer</h3></button>
    </form>
    <?php
if(isset($_POST["nom"])&& isset($_POST["prenom"])&& isset($_POST["adresse"])&& isset($_POST["ville"])&& isset($_POST["code"])){
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $adresse=$_POST["adresse"];
    $ville=$_POST["ville"];
    $code=$_POST["code"];
    echo"<table>";
    echo"<tr>";
    echo"<th>NOM</th>";
    echo"<th>PRENOM</th>";
    echo"<th>ADRESSE</th>";
    echo"<th>VILLE</th>";
    echo"<th>CODE POSTAL</th>";
    echo"</tr>";
    echo"<tr>";
    echo"<td><h3>".$nom."</h3></td>";
    echo"<td><h3>".$prenom."</h3></td>";
    echo"<td><h3>".$adresse."</h3></td>";
    echo"<td><h3>".$ville."</h3></td>";
    echo"<td><h3>".$code."</h3></td>";
    echo"</tr>";
    echo"</table>";
}
?>
   </main>
</body>
</html>