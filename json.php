<h1>Affichage du contenu du json avec print_r</h1>
<?php
// chargement du json dans un tableau associatif
$tab=json_decode(file_get_contents("fichier.json"),true);
echo "<pre>";
print_r($tab);
echo "</pre>";

echo "<h1>Avec un foreach</h1>";
afficheEnreg($tab);

function afficheEnreg($tab)
{
echo "<ul>";
foreach($tab as $clef=>$valeur)
{
    echo "<li>la clef est $clef et la valeur est $valeur</li>";
    if (is_array($valeur))
      afficheEnreg($valeur);
}
echo "</ul>";
}
?>