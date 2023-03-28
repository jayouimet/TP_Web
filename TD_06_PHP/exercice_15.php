<html>
    <head>
        <title>Formulaire</title>
    </head>
    <body>
        <?php
            include "./estAnneeBissectile.php";
            $annee = $_POST["annee"];
            if(!empty($annee)) {
                echo "<div>10 prochaines années bissectiles après ".$annee." :</div>";
                $x = 0;
                echo "<ul>";
                while ($x < 10) {
                    if (estAnneeBissectile(++$annee)) {
                        echo "<li>".$annee."</li>";
                        $x++;
                    }
                }
                echo "</ul>";
            }
            else {
                echo "Paramètre année manquant !<br />";
            }
        ?>
        <form action="" method="POST" name="form">
            <input type="number" name="annee" value="">
            <input type="submit" value="Envoyer">
        </form>
    </body>
</html>