<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <header>
            <?php include("php/menu.php"); ?>
        </header>
    <?php
        $data=yaml_parse_file("data/menu.yaml");
        foreach($data AS $cle=>$val){
            echo '<section id="'.$cle.'">';
            include('php/'.$cle.'.php');
        echo '</section>';
        }
    ?>
    </body>    
</html>