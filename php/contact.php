<?php
echo "<div id='boite'>";
$data=yaml_parse_file('data/contact.yaml');
/*echo "<pre>";
print_r($data);
echo"</pre>";*/

		echo "<h1 id='police_titre'>"."Me contacter"."</h1>";

echo "<form method='post' action='traitement.php'>";
                               
    echo "<fieldset>";
	    echo "<label for='nom'>Nom de l'expéditeur : </label>";
	    echo "<input type='text' name='nom' id='nom' />";
	    echo "<br>";
	    echo "<br>";

	    echo "<label for='prenom'>Prénom de l'expéditeur : </label>";
	    echo "<input type='text' name='prenom' id='prenom' />";
	    echo "<br>";
	    echo "<br>";

	    echo "<label for='email'>Adresse mail de l'expéditeur : </label>";
	    echo "<input type='email' name='email' id='email' />";
	    echo "<br>";
	    echo "<br>";
	                               
	    echo "<label for='objet'>Objet : </label>";
	    echo "</br>";

	    echo "<input type='text' name='objet' id='objet' />";
	    echo "</br>";
	    echo "</br>";

	    echo "<label for='message'>Message : </label>";
	    echo "</br>";
	    echo "<textarea type='text' name='message' id='message' placeholder='  Bonjour, je vous contacte car....' required></textarea>";
	    echo "</br>";
	    echo "</br>";
	    echo "<div class = "g-recaptcha" data-sitekey = '6Lf3m6gdAAAAAIg8MKJ14mzAn9G-0OcfuWIHuhYK'>";


	    echo "<input id='envoyer' type='submit' value='Envoyer' />";

    echo "</fieldset>";

    
echo "</form>";


echo "</div>";
?>

<?php
 if(isset($_POST['submit']) && $_POST['submit'] == 'SUBMIT'){
  if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
  {
        $secret = '6Lf3m6gdAAAAAJJnMujCkTzrPi02S7tZvrWl2l-f';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success){}
		}
	}        
    ?>