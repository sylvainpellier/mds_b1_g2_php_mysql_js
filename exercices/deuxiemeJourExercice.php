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

echo "<p>Il y a ".count($chambres)." chambres dans la base de données :</p>";
///
/// exercice 2 :
/// afficher : <p>Il y a 3 chambres dans la base de données :</p>
/// <ul><li>La suite (taille : 100m2)</li><li>la lodge (taille .....</li> ...</ul>


echo "<ul>";
foreach($chambres as $chambre)
{
    echo"<li>".$chambre["nom"]."(taille : ".$chambre["taille"]."m2)</li>";
}
echo "</ul>";

///
/// exercice 2 bis
///  afficher : /// <ul><li>La suite (taille : 100m2) avec comme services : <ul><li>wifi</li><li>bluetooth</li>...</ul>
/// </li><li>la lodge (taille .....</li> ...</ul>
///
///


function affichageChambreService($chambres)
{
    echo "<ul>";
    foreach ($chambres as $chambre) {
        echo "<li>" . $chambre["nom"] . "(taille : " . $chambre["taille"] . "m2) dont services ";

        echo "<ul>";
        foreach ($chambre["service"] as $service) {
            echo "<li>$service</li>";
        }

        echo "</ul>";
        echo "</li>";


    }
    echo "</ul>";
}

///
/// exercice 3 :
///  afficher : <p>Il y a 3 chambres dans la base de données :</p>
///  <p>Liste des chambres avec baignoire </p>
///  <ul><li>la lodge (taille .....</li> ...</ul>


echo "<ul>";
foreach($chambres as $chambre)
{
    $chambreDisposeBaignoire = false;

    foreach($chambre["service"] as $service)
    {
        if($service === "baignoire")
        {
            $chambreDisposeBaignoire = true;
        }
    }

    if($chambreDisposeBaignoire)
    {
        echo"<li>".$chambre["nom"]."(taille : ".$chambre["taille"]."m2)</li>";
    }

}
echo "</ul>";

echo "<ul>";
foreach($chambres as $chambre)
{
    if( array_search("baignoire",$chambre["service"]) )
    {
        echo"<li>".$chambre["nom"]."(taille : ".$chambre["taille"]."m2)</li>";
    }

}
echo "</ul>";

///
/// exercice 4 :
/// afficher : <p>Il y a une  chambre dans la base de données avec une baignoire :</p>
///  <ul><li>la lodge (taille .....</li> ...</ul>
///

$chambresAvecBaignoire = [];
foreach($chambres as $chambre)
{
    if(  array_search("baignoire",$chambre["service"]))
    {
        $chambresAvecBaignoire[] = $chambre;
    }
}
affichageChambreService($chambresAvecBaignoire);



echo "<ul>";
foreach($chambres as $chambre)
{
    $disposeBaignoire = false;

    foreach($chambre["service"] as $service)
    {
        if($service === "baignoire") $disposeBaignoire = true;
    }

    if($disposeBaignoire)   echo"<li>".$chambre["nom"]."(taille : ".$chambre["taille"]."m2)</li>";
}
echo "</ul>";