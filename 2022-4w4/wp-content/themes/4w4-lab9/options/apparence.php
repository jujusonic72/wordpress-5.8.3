<?php 

    add_action('customize_register', function(WP_Customize_Manager $manager){

        $manager->add_section("mon_theme_apparence",
                            ["title"=>"Personnalisation de l'apparence"]);
        
        
    });

?>