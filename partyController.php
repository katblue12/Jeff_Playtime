<?php
include 'connexionBdd.php';
include 'partyclass.php';
include 'theParty.php';

$party = new Shooter();
$drink = $party->showShot($bdd);
?>