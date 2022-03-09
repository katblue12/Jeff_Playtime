<?php

header ('Access-Control-Allow-Origin: *');
include 'connexionBdd.php';
include 'partyclass.php';


$party = new Shooter();
$drink = $party->showShot($bdd);
echo json_encode($drink);




?>