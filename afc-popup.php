<?php

/*
    * Plugin Name: AFC Popup
    * Plugin URI: https://www.linkedin.com/in/adrianfragacortes/
    * Description: Plugin para popup
    * Version: 1.0.0
    * Author: Adri FC
    * Author URI: https://www.linkedin.com/in/adrianfragacortes/
    * License: GPL2
    * License URI: https://www.gnu.org/licenses/gpl-2.0.html
    * Text Domain: pop-up
    * Domain Path: /languages
*/

function afc_install(){
    //Acción al activar el plugin
    require_once 'activador.php';
}
register_activation_hook(__FILE__, 'afc_install');

function afc_desactivador(){
    //Acción al desactivar el plugin
    flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'afc_desactivador');

//Menú dashboard
require_once 'partials/afc-menu.php';

//Encolamiento de archivos
require_once 'partials/afc-archivos.php';

?>