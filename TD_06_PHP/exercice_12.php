<?php
include './estAnneeBissectile.php';
if (empty($_GET['annee'])){
    echo "Entrez une année dans le paramètre annee";
    die;
}

if (!empty($_GET['annee'])){
    $a = $_GET['annee'];
}

if (estAnneeBissectile($a)) {
    echo $a . " est bissectile.";
} else {
    echo $a . " n'est pas bissectile.";
}
?>