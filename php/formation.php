<?php
echo "<div id='boite'>";
$data=yaml_parse_file('data/formation.yaml');
/*echo "<pre>";
print_r($data);
echo"</pre>";*/

foreach($data as $formation ){
    echo "<h1 id='police_titre'>"."Formation"."</h1>";

    echo "<div class='class_mini_boite_1'>";
    echo "<div class='boite_competence'>";
        echo "<strong>"."Diplôme : "."</strong>".$formation ["diplome1"]."<br />";
        echo "<strong>"."Passé dans l'établissement : "."</strong>".$formation ["etablissement1"]."<br />";
        echo "<strong>"."En : "."</strong>".$formation ["date1"]."<br />";
        echo "<h1 id='police_legende'>".$formation ["description1"]."</h1>"."<br />";
        echo "<br />"."<br />"."<br />";
    echo "</div>";

    echo "<div class='class_mini_boite_1'>";
    echo "<div class='boite_competence'>";
        echo "<strong>"."Diplôme : "."</strong>".$formation ["diplome3"]."<br />";
        echo "<strong>"."Passé dans l'établissement : "."</strong>".$formation ["etablissement3"]."<br />";
        echo "<strong>"."En : "."</strong>".$formation ["date3"]."<br />";
        echo "<h1 id='police_legende'>".$formation ["description3"]."</h1>"."<br />";
        echo "<br />"."<br />"."<br />";
    echo "</div>";
    echo "</div>";

    echo "</div>";

    echo "<div class='class_mini_boite_2'>";
    echo "<div class='boite_competence'>";
        echo "<strong>"."Diplôme : "."</strong>".$formation ["diplome2"]."<br />";
        echo "<strong>"."Passé dans l'établissement : "."</strong>".$formation ["etablissement2"]."<br />";
        echo "<strong>"."En : "."</strong>".$formation ["date2"]."<br />";
        echo "<h1 id='police_legende'>".$formation ["description2"]."</h1>"."<br />";
        echo "<br />"."<br />"."<br />";
    echo "</div>";

echo "</div>";
}
?>