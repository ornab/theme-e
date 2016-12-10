<?php 

function main_menus() {
        
        register_nav_menu('main-menu','Main Menu');
        
    }



add_action ('init','main_menus');



?>