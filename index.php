<html>
<head><?php include "parts/head.php"; ?></head>
<body>

<?php

include "data/chambres.php";

include "parts/menu.php";

if(!isset($_GET["section"]))
{
    include "pages/accueil.php";
} else if( file_exists("pages/".$_GET["section"].".php") )
{
    include "pages/".$_GET["section"].".php";
} else
{
    include "pages/404.php";
}



?>

</body>
</html>
