<?php
include './exercice_11_a.php';
if (empty($_GET['x'])){
    echo "Entrez un nombre dans le paramètre x";
    die;
}

if (!empty($_GET['x'])){
    $x = $_GET['x'];
}
?>

<div>
<table>
<?php
for ($i = 0; $i < 10; $i++) {
    echo "<tr>";
        echo "<td>".$x."</td>";
        echo "<td>"."**"."</td>";
        echo "<td>".$i."</td>";
        echo "<td>"."="."</td>";
        echo "<td>".exposant($x, $i)."</td>";
    echo "</tr>";
}
?>
</table>
</div>