<?php


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

///exercices 1 :
/// afficher : <p>Il y a 3 chambres dans la base de données :</p>
///
/// exercice 2 :
/// afficher : <p>Il y a 3 chambres dans la base de données :</p>
/// <ul><li>La suite (taille : 100m2)</li><li>la lodge (taille .....</li> ...</ul>
///
/// exercice 3 :
///  afficher : <p>Il y a 3 chambres dans la base de données :</p>
///  <p>Liste des chambres avec baignoire </p>
///  <ul><li>la lodge (taille .....</li> ...</ul>
///
/// exercice 4 :
/// afficher : <p>Il y a une  chambre dans la base de données avec une baignoire :</p>
///  <ul><li>la lodge (taille .....</li> ...</ul>