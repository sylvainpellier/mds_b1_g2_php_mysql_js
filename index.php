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

<form action="index.php" method="post">
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

if( isset($_POST["nom"]) && isset($_POST["categorie"])){


}