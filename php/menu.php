<?php


    $content=\file_get_contents('data/menu.yaml');
    $data=yaml_parse($content);

?>
    <header>
        <nav id="menutop">
            <?php
            foreach($data as $cle=>$val){
                echo("<a href='#".$cle."'>".$val."</a> ");
            }
            ?>
        </nav>
    </header>
<?php


?>