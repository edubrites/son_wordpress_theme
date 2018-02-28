<?php
/**
 * Created by PhpStorm.
 * User: dhrndev
 * Date: 27/02/2018
 * Time: 14:53
 */

?>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!-- Listagem de páginas -->
                <?php
                $pages = get_pages(['parent'=>0,'sort_column'=> 'post_title', 'sort_order'=> 'asc']);
                foreach ($pages as $p):
                    $childpages = get_pages(['child_of' => $p->ID] );
                    if(!count($childpages)){
                        $link = get_page_link($p->ID);
                        $title = $p->post_title;
                        printf('<li><a href="%s">%s</a></li>',$link,$title);    
                    }else{
                        echo '<li>';
                        printf("<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>%s <span class='caret'></span></a>",$p->post_title);
                        echo '<ul class="dropdown-menu">';
                        foreach ($childpages as $child) {
                            $linkChild = get_page_link($child->ID);
                            $titleChild = $child->post_title;

                            printf('<li><a href="%s">%s</a></li>', $linkChild, $titleChild);
                        }
                        echo '</ul></li>';
                    }
                    
                endforeach;
                ?>
            </ul>
        </div>
    </div>
</nav>