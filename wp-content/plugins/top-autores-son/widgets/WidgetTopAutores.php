<?php
/**
 * Created by PhpStorm.
 * User: dhrndev
 * Date: 26/02/2018
 * Time: 18:07
 */

class WidgetTopAutores extends WP_Widget{

    public function __construct()
    {

        $dado = array("classname" => "WidgetTopAutores", "description" => "Um widget que lista em ordem decrescente os autores com mais posts no site.");

        parent::__construct("widget_top_autores", "Top Autores", $dado);

    }

    public function form()
    {

    }

    public function widget()
    {
        require_once(DIRETORIO_RAIZ_TOP_AUTORES."widgets/widget_top_autores_front_end.php");

    }


}