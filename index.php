<a href="index.php">accueil</a><br />
<a href="index.php?type=contact">contact</a><br />
<a href="index.php?type=produits&autreparametres=true">produits</a><br />

<?php
session_start();

$_SESSION["nom"] = "valeur";

var_dump($_SESSION);