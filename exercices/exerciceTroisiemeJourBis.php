<form action="exerciceTroisiemeJourBis.php" method="post">
    Valeur <input type="text" name="valeur" value="<?php if( isset($_POST["valeur"])  ) echo $_POST["valeur"]; ?>" /><br />
    Calcul <select name="calcul">
        <option></option>
        <option <?php if( isset($_POST["calcul"])) echo $_POST["calcul"] === "addition" ? " selected='true' " : '' ?>>addition</option>
        <option <?php if( isset($_POST["calcul"]) && $_POST["calcul"] === "moyenne") { echo"selected='true'"; } ?> >moyenne</option></select><br />

    nombreA <input type="number" name="nombreA" value="<?php  echo isset($_POST["nombreA"]) ? $_POST["nombreA"] : '' ?>" /><br />
    nombreB<input type="number" name="nombreB" value="<?php echo $_POST["nombreB"] ?? '' ?>" /><br />
    nombreC<input type="number" name="nombreC" value="<?= $_POST["nombreC"] ?? '' ?>" /><br />

    <input type="submit" />
</form>

<div style="border:1px solid red; width: 200px; height: 200px;">


    <?php

    //votre code ici ///////////////////// début

    if( isset( $_POST["valeur"]) === true )
    {
        echo $_POST["valeur"];
        //echo "tartufle";
    }

    if( !empty( $_POST["mot"] ) === true && $_POST["mot"] === "algebre" )
    {
        echo "algebre et tartufle";
    }

    if( !empty($_POST["calcul"]))
    {
        $total = 0;
        $nb = 0;

        if( isset($_POST["nombreA"]) && $_POST["nombreA"] !== "")
        {
            $total += $_POST["nombreA"];
            $nb++;
        }

        if( !empty($_POST["nombreB"]))
        {
            $total += $_POST["nombreB"];
            $nb++;
        }

        if( !empty($_POST["nombreC"]))
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