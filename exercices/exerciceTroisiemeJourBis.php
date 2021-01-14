
<div style="border:1px solid red; width: 200px; height: 200px;">


    <?php

    //votre code ici ///////////////////// début

    if( isset( $_POST["valeur"]) === true )
    {
        echo $_POST["valeur"];
        //echo "tartufle";
    }

    if( isset( $_POST["mot"]) === true && $_POST["mot"] === "algebre" )
    {
        echo "algebre et tartufle";
    }

    if( isset($_POST["calcul"]))
    {
        $total = 0;
        $nb = 0;

        if( isset($_POST["nombreA"]))
        {
            $total += $_POST["nombreA"];
            $nb++;
        }

        if( isset($_POST["nombreB"]))
        {
            $total += $_POST["nombreB"];
            $nb++;
        }

        if( isset($_POST["nombreC"]))
        {
            $total += $_POST["nombreC"];
            $nb++;
        }

        switch( $_POST["calcul"] )
        {
            case "moyenne": echo $total / $nb; break;
            case "addition": echo $total; break;

        }

        //if( !isset($_POST["calcul"]) &&  !isset($_POST["mot"]) &&  !isset($_POST["valeur"])  )
        if( count($_POST) === 0)
        {
            echo "rien";
        }























    }



    /////////////////////////////////////// fin
    ?>
</div>