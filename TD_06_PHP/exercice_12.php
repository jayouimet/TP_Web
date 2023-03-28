<?php
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

function estAnneeBissectile($annee) {
    // Une année est bissectile si elle est multiple de 4, 
    // excepté de ceux qui sont divisible par 100 
    // mais pas par 400.
    if ($annee % 400 == 0) {
        return true;
    }
    
    if ($annee % 100 == 0) {
        return false;
    }
    
    if ($annee % 4 == 0) {
        return true;
    }

    return false;
}
?>