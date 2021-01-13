<html>
<head>
    <title>Dev</title>
</head>
<body>
<?php

$nbMsg = 105;
$isAdmin = false;

// Nombre de jours depuis l'inscription de l'utilisateur
$registrationDays = 356;
//  FAUX
if($isAdmin) {
    echo 'Administrateur';
    //      VRAI        et    FAUX
} else if ($nbMsg > 50 && $registrationDays < 30) {
    echo 'Flood';
    //     VRAI       ou       FAUX
} else if ($nbMsg > 50 || $registrationDays >= 365) {
    echo 'Utilisateur VIP';
} else {
    echo 'Utilisateur débutant';
}

if($max > 10)
{
    $message = "test";
} else
{
    $message = "20";
}
//équivalent avec l'opérateur ternaire
$message = ( $message > 10 ) ? "test" : "20" ;

//Les fonctions

function addition($nombreA,$nombre)
{
    return $nombreA + $nombre;
}
function soustraction($nombreA,$nombre)
{
   return $nombreA - $nombre;
}

function division($nombreA,$nombre)
{
    if($nombre === 0)
    {
        return "erreur";
    } else
    {
        return $nombreA / $nombre;
    }

}

function calculAlt($type,$nombreA,$nombre)
{
    if($type === "addition")
    {
        return $nombreA + $nombre;
    } else if($type === "soustraction")
    {
        return $nombreA - $nombre;
    } else if($type === "division")
    {
        return $nombreA / $nombre;
    }
}

function calcul($type,$nombreA,$nombre)
{
    switch($type)
    {
        case "addition" : return addition($nombreA,$nombre); break;
        case "soustraction" : return soustraction($nombreA,$nombre); break;
        case "division" : return division($nombreA,$nombre); break;
    }
}
//à ne pas toucher
echo "Résultat = ".addition(10,4)."<br />";
echo "Résultat = ".addition(4,4)."<br />";
echo "Résultat = ".soustraction(13,4)."<br />";
echo "Résultat = ".soustraction(10,4)."<br />";
echo "Résultat = ".calcul("addition",13,4)."<br />";
echo "Résultat = ".calcul("soustraction",4,4)."<br />";
echo "Résultat = ".calcul("division",4,4)."<br />";
//gérer ce cas pour ne pas avoir d'erreur
echo "Résultat = ".calcul("division",4,0)."<br />";







echo"<hr />";



















///Les variables

    //commentaire
    $total = 10;
    $nomvariable1 = "toto  $total {$total} ";
    $nomvariable1bis = 'Aujourd\'hui';
    $nomvariable1bisbis = "Aujourd'hui";

    echo $total . $nomvariable1. " fdsfsd " . $nomvariable1bisbis;

    $nomvariable2 = 10;

    $nomvariable2 = $nomvariable2 + 10;
    $nomvariable2 += 10; //identique à la ligne précédente

    $nomvariable2++; /// += 10   $nomvariable2 = $nomvariable + 1;


    $nomvariable3 = 10.4444444;

    $nomvariable3 = ($nomvariable3 * 3) / 2 * $nomvariable2;


    $nomvariable4 = [];
    $nomvariable5 = $nomvariable4;
    $nomvariable6 = true;
    $nomvariable7 = false;
    $nomvariable8 = $nomvariable2 + $nomvariable3;
    $nomvariable9 = null;





    echo "<h2>Mon titre 2</h2>";

    echo "<h3>xxxx</h3>";

?>


</body>

</html>