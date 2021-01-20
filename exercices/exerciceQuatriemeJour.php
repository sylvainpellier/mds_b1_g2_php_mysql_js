<?php
session_start();

if(!isset($_SESSION["historique"])) $_SESSION["historique"] = [];
$historique = $_SESSION["historique"];


if(isset($_GET["nombreA"])) { $a = $_GET["nombreA"];}
else if(isset($_COOKIE["nombreA"])) { $a = $_COOKIE["nombreA"];}
else $a = 0;

if(isset($_GET["nombreB"])) { $b = $_GET["nombreB"];}
else if(isset($_COOKIE["nombreB"])) { $b = $_COOKIE["nombreB"];}
else $b = 0;

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

function multiplication($nombreA,$nombre)
{
    return $nombreA * $nombre;

}


if(isset($_GET["calcul"]) && !empty($_GET["nombreA"]) && !empty($_GET["nombreB"])) {

    setcookie("nombreA",$_GET["nombreA"],time() + 3600);
    setcookie("nombreB",$_GET["nombreB"],time() + 3600);


    switch ($_GET["calcul"]) {
        case "addition":
            $resultat =  addition($_GET["nombreA"],$_GET["nombreB"]);
            $operateur = "+";
            break;
        case "soustraction":
            $resultat =  soustraction($_GET["nombreA"],$_GET["nombreB"]);
            $operateur = "-";
            break;
        case "division":
            $resultat = division($_GET["nombreA"],$_GET["nombreB"]);
            $operateur = "/";
            break;
        case "multiplication":
            $resultat =  multiplication($_GET["nombreA"],$_GET["nombreB"]);
            $operateur = "*";
            break;

    }


    $historique[] = $_GET["nombreA"] . $operateur . $_GET["nombreB"] . "=" . $resultat;
    $_SESSION["historique"] = $historique;

}


?>
<form action="" method="get">
    <input type="text" name="nombreA"  value="<?php echo $a; ?>"  />
    <input type="text" name="nombreB" value="<?php echo $b; ?>" />
    <select name="calcul" >
        <option>addition</option>
        <option>soustraction</option>
        <option>division</option>
        <option>multiplication</option>
    </select>
<input type="submit" value="calculer" />
</form>
<?php

  if(isset($_GET["calcul"]))  echo"Le résultat du calcul ( {$_GET["calcul"]} ) est = $resultat ";

echo"<p>Historique des calculs :</p>";



foreach($historique as $calcul)
{
    echo "<p>$calcul</p>";
}

///étape 1 : code à fournir pour afficher le bon résultat
///étape 2 : pas d'erreur si on veut diviser par zéro
///étape 3 : utiliser les fonctions déjà créées