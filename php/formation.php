<?php
echo "<div id='boite'>";
$data=yaml_parse_file('data/formation.yaml');
/*echo "<pre>";
print_r($data);
echo"</pre>";*/

foreach($data as $formation ){
    echo "<div>";
    echo $formation ["poste"]."<br />";
    echo $formation ["entreprise"]." à " .$formation["lieu"]."<br />";
    echo "De ".$formation["dateDebut"]." à ".$formation["dateFin"]."<br />";
    echo  $formation["descriptif"]."<br />";
    echo "</div>";
}
echo "</div>";
?>