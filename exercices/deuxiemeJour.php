<?php

$matieres = ["php","mysql","css"];

//exercice 1 : afficher la liste des matieres
//<ul><li>php</li><li>mysql ....</ul>

echo"<ul>";
foreach($matieres as $matiere)
{
    echo "<li>".$matiere."</li>";
    //echo "<li>$matiere</li>"; //équivalent
    //echo "<li>{$matiere}</li>"; //équivalent
}
echo"</ul>";

//exercice 2 : afficher la liste des matieres
//<ul><li>php</li><li><u>mysql</u> ....</ul>

echo"<ul>";
foreach($matieres as $matiere)
{
    echo "<li>";
    if($matiere === "mysql") echo"<u>";
        echo $matiere;
    if($matiere === "mysql") echo"</u>";
    echo"</li>";
}
echo"</ul>";


echo"<ul>";
foreach($matieres as $matiere)
{
    $uOuvert = "";
    $uFerme = "";

    if($matiere === "mysql")
    {
        $uOuvert = "<u>";
        $uFerme = "</u>";
    }
    echo "<li>{$uOuvert}{$matiere}{$uFerme}</li>";

}
echo"</ul>";

echo"<ul>";
foreach($matieres as $matiere)
{
    $affichageU = $matiere === "mysql";
    echo "<li>";
    if($affichageU) echo"<u>";
    echo $matiere;
    if($affichageU)  echo"</u>";
    echo"</li>";
}
echo"</ul>";


//code :

//exercice 3 : afficher la liste des matieres plus des informations
//<p>Il y a trois matières disponibles : </p><ul><li>php</li></li><u>mysql</u> ....</ul>

echo"<p>Il y a ".count($matieres)." matières disponibles : </p>";
echo"<ul>";
foreach($matieres as $matiere)
{
    echo "<li>".$matiere."</li>";
}
echo"</ul>";

//exercice 3 bonus: afficher la liste des matieres plus des informations
//<p>Il y a trois matières disponibles : </p><ul><li>php</li></li><u>mysql</u> ....</ul>
//<p>Il y a une matière disponible : </p><ul><li>php</li></li><u>mysql</u> ....</ul>

switch( count($matieres) )
{
    case 0 : echo"<p>Il n'y a aucune matière</p>"; break;
    case 0 : echo"<p>Il y a une matière</p>"; break;
    default : echo"<p>Il y a ".count($matieres)." matières disponibles : </p>";
}


//équivalent
echo"<p>Il y a ".count($matieres)." matière".  (count($matieres) > 1 ? "s" : "") ."  disponible".  (count($matieres)> 1 ? "s" : "") ." : </p>";
echo"<ul>";
foreach($matieres as $matiere)
{
    echo "<li>".$matiere."</li>";
}
echo"</ul>";

?>
