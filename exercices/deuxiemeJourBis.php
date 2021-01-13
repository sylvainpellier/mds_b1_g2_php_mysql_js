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

