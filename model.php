<?php

//Retourne tous les séjours
// test pour voir les modifs
function getAllSejours()
{
$bdd = new PDO('mysql:host=localhost;dbname=bdstpaul;charset=utf8', 'root');
$sejours = $bdd->query('select * from sejour order by sejno');
return $sejours;
}
