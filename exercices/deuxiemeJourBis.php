<?php



$listeEleveClasse1 = ["Tom","toto"];
$listeEleveClasse2 = ["Elsa","Titi"];

$classe1 = [];
$classe1["nom"] = "Dev1";
$classe1["eleves"] = $listeEleveClasse1;

$classe2 = [];
$classe2["nom"] = "Dev2";
$classe2["eleves"] = $listeEleveClasse2;

$ecoles = [$classe1,$classe2];

foreach($ecoles as $classe)
{
    echo"<p>Liste des élèves de la ".$classe["nom"]." : </p>";

    echo"<ul>";
    foreach($classe["eleves"] as $eleve)
    {
        echo "<li>$eleve</li>";
    }
    echo"</ul>";

    echo"<hr />";
}


























//exercice 2

$chambres = [];

$chambre1 = [];
$chambre1["nom"] = "La suite";
$chambre1["taille"] = 100;
$chambre1["service"] = ["wifi","bluetooth","douche"];

$chambres[] = $chambre1;

$chambre2 = [];
$chambre2["nom"] = "La lodge";
$chambre2["taille"] = 200;
$chambre2["service"] = ["wifi","baignoire","baignoire"];

$chambres[] = $chambre2;

$chambre3 = [];
$chambre3["nom"] = "La mini";
$chambre3["taille"] = 50;
$chambre3["service"] = ["wifi","douche"];

$chambres[] = $chambre3;