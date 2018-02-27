<?php
/**
 * Created by PhpStorm.
 * User: dhrndev
 * Date: 26/02/2018
 * Time: 15:58
 *
 * Plugin Name: Hello World Curso SON
 * Author: Eduardo Brites
 * Description: Um plugin que vai printar a mensagem 'Hello World' na sua tela de login.
 * Author URI: http://dhrn.com.br
 * Version: 0.01
 *
 */

function wp_printando_hello_world_na_tela_de_login(){
    echo "<h1>Hoje é: ".date('d/m/Y')."</h1>";
    echo "<style> body{background-color: black !important;}</style>";
}


add_action('admin_init ','wp_printando_hello_world_na_tela_de_login');

function wp_alterando_o_texto_do_footer_admin()
{

    echo "<style>
               #ads-propaganda{
                background-color: blue;
                width: 200px;
                height: 300px;
                color:white;
               }
        </style>";
    echo "<h1 id='ads-propaganda'>Testando testando</h1>";
}

add_filter('the_content', 'wp_alterando_o_texto_do_footer_admin');

