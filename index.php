<?php
// cette ligne est là pour voir les erreurs, vous ne devriez pas l'avoir sur le site que vous allez me rendre mercredi 17/1
error_reporting(E_ALL); ini_set("display_errors", 1); 
// end errors logs

//Implémentation des fonction php
require 'inc/Primitives.inc.php';

//Imports des données Json
$info=init_json("data/Data");
//print_r($tab);

require 'inc/Head.inc.php';
require 'inc/nav.inc.php';

?>
