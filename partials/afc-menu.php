<?php
/*
* Creando el menú pop-up
*/

if(!function_exists('afc_menu_popup')){

    function afc_menu_popup(){

        add_menu_page(
            'Menú Pop-up',
            'Menú Pop-up',
            'manage_options',
            'afc_popup',
            'afc_options_menu_popup',
            'dashicons-megaphone',
            12
        );
    }
    add_action('admin_menu', 'afc_menu_popup');
}

//Función callback
if(!function_exists('afc_options_menu_popup')){

    function afc_options_menu_popup(){
        echo "Testing";
    }
}



