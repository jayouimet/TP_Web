<?php
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