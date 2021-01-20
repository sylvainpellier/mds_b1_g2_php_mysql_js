<form action="" method="get">
    <input type="text" name="nombreA" />
    <input type="text" name="nombreB" />
    <select name="calcul" >
        <option>addition</option>
        <option>soustraction</option>
        <option>division</option>
        <option>multiplication</option>
    </select>
<input type="submit" value="calculer" />
</form>

<?php

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

    echo"Le résultat du calcul ( {$_GET["calcul"]} ) est =  ";

    switch ($_GET["calcul"]) {
        case "addition":
            echo addition($_GET["nombreA"],$_GET["nombreB"]);
            break;
        case "soustraction":
            echo soustraction($_GET["nombreA"],$_GET["nombreB"]);
            break;
        case "division":
            echo division($_GET["nombreA"],$_GET["nombreB"]);
            break;
        case "multiplication":
            echo multiplication($_GET["nombreA"],$_GET["nombreB"]);
            break;

    }
}

///étape 1 : code à fournir pour afficher le bon résultat
///étape 2 : pas d'erreur si on veut diviser par zéro
///étape 3 : utiliser les fonctions déjà créées