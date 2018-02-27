<?php
/**
 * Created by PhpStorm.
 * User: dhrndev
 * Date: 26/02/2018
 * Time: 16:47
 *
 * Plugin Name: Top Autores
 * Author: Eduardo Brites
 * Description: Gera uma lista com os autores que mais postam no site, através de um shortcode
 * Author URI: http://dhrn.com.br
 * Version: 1.0 Beta
 *
 */

error_reporting(0);
define('DIRETORIO_RAIZ_TOP_AUTORES',plugin_dir_path(__FILE__));

require_once(DIRETORIO_RAIZ_TOP_AUTORES.'shortcodes/top-author-shortcode.php');
require_once(DIRETORIO_RAIZ_TOP_AUTORES.'widgets/WidgetTopAutores.php');


function registrar_widgets_do_plugin_top_autores(){
    register_widget("WidgetTopAutores");
}

add_action('init','shortcode_top_autores_register');

add_action('widgets_init','registrar_widgets_do_plugin_top_autores');

