<?php
echo "<div id='boite'>";
$data=yaml_parse_file('data/experience.yaml');
/*echo "<pre>";
print_r($data);
echo"</pre>";*/

foreach($data as $experience )
{
    echo "<h1 id='police_titre'>"."Experiences"."</h1>";

    echo "<div class='class_mini_boite_1'>";
    echo "<div class='boite_competence'>";
        echo "<strong>"."Réalisé dans le secteur : "."</strong>".$experience ["secteur1"]."<br />";
        echo "<strong>"."Pour un : "."</strong>".$experience ["poste1"]."<br />";
        echo "<strong>"."Dans l'entreprise : "."</strong>".$experience ["entreprise1"]."<br />";
        echo "<strong>"."De : "."</strong>".$experience ["dateDebut1"]."<br />";
        echo "<strong>"."A : "."</strong>".$experience ["dateFin1"]."<br />";
        echo "<strong>"."Réalisé à : "."</strong>".$experience ["lieu1"]."<br />";
        echo "<strong>"."Description : "."</strong>".$experience ["descriptif1"]."<br />";
        echo "<br />"."<br />"."<br />";
    echo "</div>";

    echo "<div class='boite_competence'>";
        echo "<strong>"."Réalisé dans le secteur : "."</strong>".$experience ["secteur2"]."<br />";
        echo "<strong>"."Pour un : "."</strong>".$experience ["poste2"]."<br />";
        echo "<strong>"."Dans l'entreprise : "."</strong>".$experience ["entreprise2"]."<br />";
        echo "<strong>"."De : "."</strong>".$experience ["dateDebut2"]."<br />";
        echo "<strong>"."A : "."</strong>".$experience ["dateFin2"]."<br />";
        echo "<strong>"."Réalisé à : "."</strong>".$experience ["lieu2"]."<br />";
        echo "<strong>"."Description : "."</strong>".$experience ["descriptif2"]."<br />";
        echo "<br />"."<br />"."<br />";
    echo "</div>";
    echo "</div>";

    echo "<div class='class_mini_boite_2'>";
    echo "<div class='boite_competence'>";;
        echo "<strong>"."Réalisé dans le secteur : "."</strong>".$experience ["secteur3"]."<br />";
        echo "<strong>"."Pour un : "."</strong>".$experience ["poste3"]."<br />";
        echo "<strong>"."Dans l'entreprise : "."</strong>".$experience ["entreprise3"]."<br />";
        echo "<strong>"."De : "."</strong>".$experience ["dateDebut3"]."<br />";
        echo "<strong>"."A : "."</strong>".$experience ["dateFin3"]."<br />";
        echo "<strong>"."Réalisé à : "."</strong>".$experience ["lieu3"]."<br />";
        echo "<strong>"."Description : "."</strong>".$experience ["descriptif3"]."<br />";
        echo "<br />"."<br />"."<br />";
    echo "</div>";

    echo "<div class='boite_competence'>";
        echo "<strong>"."Réalisé dans le secteur : "."</strong>".$experience ["secteur4"]."<br />";
        echo "<strong>"."Pour un : "."</strong>".$experience ["poste4"]."<br />";
        echo "<strong>"."Dans l'entreprise : "."</strong>".$experience ["entreprise4"]."<br />";
        echo "<strong>"."De : "."</strong>".$experience ["dateDebut4"]."<br />";
        echo "<strong>"."A : "."</strong>".$experience ["dateFin4"]."<br />";
        echo "<strong>"."Réalisé à : "."</strong>".$experience ["lieu4"]."<br />";
        echo "<strong>"."Description : "."</strong>".$experience ["descriptif4"]."<br />";
        echo "<br />"."<br />"."<br />";
    echo "</div>";
    echo "</div>";


    echo "<h3><a id='CV' href='cv/CV.pdf'>Mon CV</a></h3>";
}
echo "</div>";
?>