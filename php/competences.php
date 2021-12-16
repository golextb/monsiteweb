<?php
echo "<div id='boite'>";
$data=yaml_parse_file('data/competences.yaml');
/*echo "<pre>";
print_r($data);
echo"</pre>";*/
foreach($data as $competences ){
    echo "<div>";
    echo "<h1 id='police_titre'>".$competences["domaine1"]."</h1>"."<br />"."<br />";
    echo "<h1 id='police_competences'>".$competences["nom1"]." : "."</h1>"."<span class='bar'>"."<span style='width :".$competences["niveau1"]."%;'>"."</span>"."</span>"."<br />";
    echo "<h1 id='police_competences'>".$competences["nom2"]." : "."</h1>"."<span class='bar'>"."<span style='width :".$competences["niveau2"]."%;'>"."</span>"."</span>"."<br />";
    echo "<h1 id='police_competences'>".$competences["nom3"]." : "."</h1>"."<span class='bar'>"."<span style='width :".$competences["niveau3"]."%;'>"."</span>"."</span>"."<br />";
    echo "<br />"."<br />";
    echo "<h1 id='police_titre'>".$competences["domaine2"]."</h1>"."<br />"."<br />";
    echo "<h1 id='police_competences'>".$competences["nom4"]." : "."</h1>"."<span class='bar'>"."<span style='width :".$competences["niveau4"]."%;'>"."</span>"."</span>"."<br />";
    echo "<h1 id='police_competences'>".$competences["nom5"]." : "."</h1>"."<span class='bar'>"."<span style='width :".$competences["niveau5"]."%;'>"."</span>"."</span>"."<br />";

    echo "</div>";
}
echo "</div>";
?>
