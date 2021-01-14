<a href="index.php">accueil</a><br />
<a href="index.php?type=contact">contact</a><br />
<a href="index.php?type=produits&autreparametres=true">produits</a><br />

<hr />
<?php

if(isset($_GET["type"])) {
    echo $_GET["type"];
} else{
    echo "aucun type";
}


echo"<hr />";

echo "GET ";
var_dump($_GET);

echo "<hr />POST ";
var_dump($_POST);
echo "<hr /> ";

?>

<form action="exercices/exerciceTroisiemeJourBis.php" method="post">
   Valeur <input type="text" name="valeur" /><br />
    Calcul <input type="text" name="calcul" /><br />
    nombreA <input type="text" name="nombreA" /><br />
    nombreB<input type="text" name="nombreB" /><br />
    nombreC<input type="text" name="nombreC" /><br />

    <input type="submit" />
</form>


<?php

if( isset($_POST["nom"]) && isset($_POST["categorie"])){


}