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

var_dump($_GET);

