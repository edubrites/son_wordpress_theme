<?php
/**
 * Created by PhpStorm.
 * User: dhrndev
 * Date: 26/02/2018
 * Time: 17:56
 */

function shortcode_top_autores_front_end()
{
    $dados = get_users(array("orderby"=>'post_count',"order"=>'desc'));

    echo "<h1>TOP AUTORES</h1>";
    echo "<p>Uma lista com os usuários que mais postaram em toda a historia deste site.</p>";

    foreach ($dados as $dado)
    {
        echo get_avatar($dado->id)."<br>";
        echo "<b>Nome: ".esc_html($dado->user_nicename)."</b><br>";
        echo "<b>E-mail: ".esc_html($dado->user_email)."</b><br>";
        if($dado->user_url){
            echo "<b>Url: ".$dado->user_url."</b><br>";
        }

        $num_posts = count_user_posts($dado->id);
        echo "<b>Número de posts:&nbsp;&nbsp;&nbsp;</b>$num_posts";

        $link = get_author_posts_url($dado->id);
        echo "<br><a href='".$link."'><button>Visulaizar Posts</button></a>";
        echo "<hr><br><br>";

    }

}


function shortcode_top_autores_register(){
    add_shortcode('top-autores','shortcode_top_autores_front_end');
}
