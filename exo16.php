<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE 16</title>
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
            <li><a href="exo17.php">Exercice 17</a></li>
        </ul>
    </aside>
    <main class="contenu">
        <h1>EXERCICE 16</h1>
        <h1>Transformer vos chaines</h1>
    <form action="" method="POST">
        <label for="strings"><h3>Entrer des chaines(séparés par des virgules):</h3></label>
        <br>
        <textarea name="chaine" id="chaine" placeholder="Exemple: pOmMe, BANANE, orANGE"></textarea>
        <br>
        <br>
        <button type="submit"><h3>Transformer</h3></button>
    </form>
    <?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $input=isset($_POST['chaine'])? $_POST['chaine']: '';
    if(!empty($input)){
        $chaine=array_map('trim', explode(',',$input));
    function transformerTableauEnMajuscule( array &$chaine) {
        foreach ($chaine as &$ligne) {
        $ligne = ucfirst(strtolower($ligne));
        }
    }
    transformerTableauEnMajuscule($chaine);
        echo"<h1>Résultat</h1>";
        echo"<ul>";
        foreach ($chaine as $ligne){
            echo"<li>$ligne</li>";
        }
        echo"</ul>";
} else{
    echo"<p style='color:red;'>Veuillez entrer des chaînes de caractères</p>";
}
}
?>
</main>
</body>
</html>