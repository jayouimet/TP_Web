<?php
if (empty($_GET['id'])){
    echo "Entrez un nombre dans le paramètre id";
    die;
}

if (!empty($_GET['id'])){
    $identificateur = $_GET['id'];
}

$individus = array();
$individu = array(
    'Id' => 1,
    'Nom' =>'Plante',
    'Prenom' =>'Diane',
    'Age'=>18,
    'Nationalite'=>'Canadienne',
);
array_push($individus, $individu);

$individu = array(
    'Id' => 2,
    'Nom' =>'Bouchard',
    'Prenom' =>'Robert',
    'Age'=>19,
    'Nationalite'=>'Canadien',
);
array_push($individus, $individu);

$individu = array(
    'Id' => 3,
    'Nom' =>'Smith',
    'Prenom' =>'James',
    'Age'=>20,
    'Nationalite'=>'Americain',
);
array_push($individus, $individu);

$individu = array(
    'Id' => 4,
    'Nom' =>'Rodriguez',
    'Prenom' =>'Pedro',
    'Age'=>21,
    'Nationalite'=>'Espagnol',
);
array_push($individus, $individu);
$found = false;
if (array_search($identificateur, array_column($individus, 'Id')) !== false) {
    $found = true;
}
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
if ($found === true) {
    foreach ($individus[array_search($identificateur, array_column($individus, 'Id'))] as $attr) {
        echo "<td>".$attr."</td>";
    }
}
echo "</tr>";
?>
</table>
</div>