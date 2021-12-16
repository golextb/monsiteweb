<?php
echo "<div id='boite'>";
$data=yaml_parse_file('data/a_propos.yaml');
/*echo "<pre>";
print_r($data);
echo"</pre>";*/

foreach($data as $a_propos ){
    echo "<div id='block_text'>";
    echo "<h1 id='police_titre'>".$a_propos ["accroche"]."</h1>"."<br />";
    echo "<h1 id='police_text'>".$a_propos ["presentation1"]." ".$a_propos["prenom"]." ".$a_propos["nom"].", ".$a_propos ["presentation2"]." ".$a_propos["actuelle"]." ".$a_propos ["diplome2"].", ".$a_propos ["future"]."."."<br />";
    echo $a_propos["presentation3"]." ".$a_propos["objectif"]."."."</h1>"."<br />";
    echo "</div>";
}
    echo "<img id='image_illustration' src='image/photo_illustrant.jpg'>";
echo "</div>";
?>
