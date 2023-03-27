<?php
if (empty($_GET['id'])){
    echo "Entrez un nombre dans le paramètre id";
    die;
}

if (!empty($_GET['id'])){
    $identificateur = $_GET['id'];
}

$nombres = array(1, 2, 3, 4);
$est_trouve = in_array($identificateur, $nombres);

foreach ($nombres as $nombre) {
    echo "<div>".$nombre."</div>";
}

if ($est_trouve) {
    echo "Trouvé";
} else {
    echo "Pas trouvé";
}
?>