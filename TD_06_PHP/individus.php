<?php
$individus = array();
$individu = array(
    'Nom' =>'Plante',
    'Prenom' =>'Diane',
    'Age'=>18,
    'Nationalite'=>'Canadienne',
);
array_push($individus, $individu);

$individu = array(
    'Nom' =>'Bouchard',
    'Prenom' =>'Robert',
    'Age'=>19,
    'Nationalite'=>'Canadien',
);
array_push($individus, $individu);

$individu = array(
    'Nom' =>'Smith',
    'Prenom' =>'James',
    'Age'=>20,
    'Nationalite'=>'Americain',
);
array_push($individus, $individu);

$individu = array(
    'Nom' =>'Rodriguez',
    'Prenom' =>'Pedro',
    'Age'=>21,
    'Nationalite'=>'Espagnol',
);
array_push($individus, $individu);
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
foreach ($individus as $individu) {
    echo "<tr>";
    foreach ($individu as $attr) {
        echo "<td>".$attr."</td>";
    }
    echo "</tr>";
}
?>
</table>
</div>