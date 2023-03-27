<?php
    function exposant($x, $y) {
        if ($y == 0) return 1;
        $resultat = $x;
        for ($i = 0; $i < $y; $i++) {
            $resultat = $resultat * $x;
        }
        return $resultat;
    }
?>