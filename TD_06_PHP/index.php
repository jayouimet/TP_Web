<?php
$prenom = array(1=> 'robert', 2=> 'roger', 3=> 'germain', 4=>'fernand');
// afficher
echo $prenom[1].' - '.$prenom[2].' - '.$prenom[3].' - '. $prenom[4].'<br>';
$prenom[0] = 'félicien';
echo $prenom[0] .'<br>';
?>