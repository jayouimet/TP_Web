<?php
$individu = array(
    'Nom' =>'Plante',
    'Prenom' =>'Diane',
    'Age'=>18,
    'Nationalite'=>'Canadienne',
);
?>

<div>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Age</th>
            <th>Nationalité</th>
        </tr>
        <?php
        echo "<tr>";
        foreach ($individu as $attr) {
            echo "<td>".$attr."</td>";
        }
        echo "</tr>";
        ?>
    </table>
</div>