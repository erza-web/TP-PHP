<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 10</title>
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
    <h1>EXERCICE 10</h1>
    <h1>TABLEAU</h1>
    <form action="" method="POST">
        <label for=""><h3>Entrer une chaine de caractère:</h3></label>
        <input type="text" name="chaine" id="chaine">
        <br>
        <button type="submit">Envoyer</button>
    </form>
    <?php
if(isset($_POST["chaine"])){
    $chaine=$_POST["chaine"];
    $i=0;
    $compteur_voyelle=0;
    $compteur_consonne=0;
    while($i<strlen($chaine)){
        $caractere=$chaine[$i];
        if(($caractere>='a'&& $caractere<='z')||($caractere>='A'&& $caractere<='Z')){
            if($caractere =='a'||$caractere =='e'||$caractere =='i'||$caractere =='o'||$caractere =='u'||$caractere=='y'||$caractere =='A'||$caractere =='E'||$caractere=='I'||$caractere =='O'||$caractere=='U'||$caractere=='Y'){
                $compteur_voyelle++;
            }
            else{
                $compteur_consonne++;
            }
        }
        $i++;
    }
    echo"Il y'a ".$compteur_voyelle." voyelle (s) et ".$compteur_consonne." consonne (s) dans cette chaîne.";
}
?>
</main>
</body>
</html>