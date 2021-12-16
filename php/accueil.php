<?php
echo "<div id='boite'>";
$data=yaml_parse_file('data/accueil.yaml');
/*echo "<pre>";
print_r($data);
echo"</pre>";*/

foreach($data as $accueil ){
    echo "<div>";
    echo "<h1 id='police_intro'>".$accueil ["prenom"]." ";
    echo $accueil ["nom"]."</h1>"."<br />";
    echo "<h1 id='police_text_intro1'>".$accueil["descriptif1"]."</h1>"."<br />";
    echo "<h1 id='police_text_intro2'>".$accueil["descriptif2"]." ".$accueil["actuel"]."."."</h1>"."<br />";
    echo "</div>";
}
 	echo "<img id='image_damien' src='image/damien_raimbourg.jpg'>";
    echo "</div>";
?>