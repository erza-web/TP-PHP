<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXCERCICE 9</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/style1.css">
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
    <h1>EXERCICE 9</h1>
<h1>TABLEAU</h1>
<?php
$personne=[
    "Dragneel"=>[
        "prenom"=>"Natsu",
        "ville"=>"Magnolia",
        "residence"=>"Guilde De Fairy Tail",
        "age"=>"418 ans",
    ],
    "Ken"=>[
        "prenom"=>"Kaneki",
        "ville"=>"Tokyo",
        "residence"=>"20e arrondissement",
        "age"=>"18 ans",
    ],
    "Ackerman"=>[
        "prenom"=>"Livai",
        "ville"=>"Ville des mûrs",
        "residence"=>"District Souterrain",
        "age"=>"30 ans",
    ],
    "Zoldyck"=>[
        "prenom"=>"Kirua",
        "ville"=>"Mont Kukuroo",
        "residence"=>"Manoir Zoldyck",
        "age"=>"12 ans",
    ],
];
echo"<table>";
echo"<tr>";
echo "<th>Nom</th>"; 
echo "<th>Prenom</th>"; 
echo "<th>Ville</th>";
echo "<th>Residence</th>";
echo "<th>Âge</th>";
echo"</tr>";
foreach($personne as $nom => $valeur){
    echo"<tr>";
    echo "<td ><h3>".$nom."</h3></td>";
    echo "<td><h3>".$valeur["prenom"]."</h3></td>";
    echo "<td><h3>".$valeur["ville"]."</h3></td>";
    echo "<td><h3>".$valeur["residence"]."</h3></td>";
    echo "<td><h3>".$valeur["age"]."</h3></td>";
    echo"</tr>";
}
echo"</table>";
?>
</main>
</body>
</html>