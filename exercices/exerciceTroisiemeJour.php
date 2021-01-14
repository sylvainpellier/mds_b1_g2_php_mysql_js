<h1>Exercice 3 :</h1>

<p><a href="exerciceTroisiemeJour.php?valeur=tartufle">en cliquant sur ce lien la page exercice3.php doit afficher dans le cadre de solution le mot : tartfufle</a></p>

<p><a href="exerciceTroisiemeJour.php?mot=algebre">en cliquant sur ce lien la page exercice3.php doit afficher dans le cadre de solution le mot : algebre et tartufle</a></p>

<p><a href="exerciceTroisiemeJour.php?calcul=moyenne&nombreA=3&nombreB=4&nombreC=7">en cliquant sur ce lien la page exercice3.php doit afficher dans le cadre de solution la moyenne de 3,4 et 7</a></p>

<p><a href="exerciceTroisiemeJour.php?calcul=moyenne&nombreA=3&nombreB=8">en cliquant sur ce lien la page exercice3.php doit afficher dans le cadre de solution la moyenne de 3 et 8</a></p>

<p><a href="exerciceTroisiemeJour.php?calcul=moyenne&nombreB=3&nombreC=5">en cliquant sur ce lien la page exercice3.php doit afficher dans le cadre de solution la moyenne de 3 et 5</a></p>

<p><a href="exerciceTroisiemeJour.php?calcul=addition&nombreB=3&nombreC=5">en cliquant sur ce lien la page exercice3.php doit afficher dans le cadre de solution la moyenne de 3 et 5</a></p>

<p><a href="exerciceTroisiemeJour.php">en cliquant sur ce lien la page exercice3.php doit afficher dans le cadre de solution le mot "rien"</a></p>


<hr />

<h2>Solution : </h2>

<div style="border:1px solid red; width: 200px; height: 200px;">


    <?php

    //votre code ici ///////////////////// début

    if( isset( $_GET["valeur"]) === true )
    {
            echo $_GET["valeur"];
            //echo "tartufle";
    }

    if( isset( $_GET["mot"]) === true && $_GET["mot"] === "algebre" )
    {
        echo "algebre et tartufle";
    }

    if( isset($_GET["calcul"]))
    {
        $total = 0;
        $nb = 0;

        if( isset($_GET["nombreA"]))
        {
            $total += $_GET["nombreA"];
            $nb++;
        }

        if( isset($_GET["nombreB"]))
        {
            $total += $_GET["nombreB"];
            $nb++;
        }

        if( isset($_GET["nombreC"]))
        {
            $total += $_GET["nombreC"];
            $nb++;
        }

        switch( $_GET["calcul"] )
        {
            case "moyenne": echo $total / $nb; break;
            case "addition": echo $total; break;

        }

        //if( !isset($_GET["calcul"]) &&  !isset($_GET["mot"]) &&  !isset($_GET["valeur"])  )
        if( count($_GET) === 0)
        {
            echo "rien";
        }























    }



    /////////////////////////////////////// fin
    ?>
</div>