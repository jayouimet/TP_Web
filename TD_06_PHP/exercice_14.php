<html>
    <head>
        <title>Formulaire</title>
    </head>
    <body>
        <?php
            $nom = $_GET["nom"];
            if(!empty($nom)) {
                $heure = date("H");
                if($heure >= 18)
                    $message = "Bonsoir $nom,<br />";
                else 
                    $message = "Bonjour $nom,<br />";
                echo $message;
            }
            else {
                echo "Paramètre nom manquant !<br />";
            }
            echo "<br />Essayez :<br /><br />";
        ?>
        <!-- action : La route vers laquelle on envoi la requête. Comme c'est vide, on utilise la localisation actuelle (dans notre cas le même fichier php) -->
        <form action="" method="GET" name="form">
            <input type="text" name="nom" value="">
            <input type="submit" value="Envoyer">
        </form>
    </body>
</html>
<!-- OBSERVATION:
    Lors de la méthode POST, 
    l'information du formulaire est envoyé dans le corps de la requête,
    pour GET, c'est envoyé à travers l'URL. Quand on entre une requête à partir
    de l'URL d'un navigateur, on utilise GET. 
    Un bon outil pour tester les requêtes sur un serveur :
    https://www.postman.com/
    Pour plus de lecture sur les type de requêtes :
    https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods
 -->