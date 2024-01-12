<?php
function init_json($path)
{
$resultat=json_decode(file_get_contents($path.".json"),true);;
return $resultat;
}

//$test=init_json("../data/Data");
//print_r($test);

function titre($tab,$num) 
{
	$titre_selected=$tab["titre"][$num]["Title"];
	echo $titre_selected;
	}

?>
