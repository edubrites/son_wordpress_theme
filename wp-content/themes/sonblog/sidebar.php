<?php
/**
 * Created by PhpStorm.
 * User: dhrndev
 * Date: 27/02/2018
 * Time: 14:56
 */
?>

<?php
get_search_form();
?>

<h3>Categorias da SON</h3>
<ul class="list-group">
    <?php
    $categories = get_categories();
    foreach ($categories as $category):
        printf('<li class="list-group-item"><a href="%s" title="%s">%s</a></li>',
            get_category_link($category->term_id),sprintf("Ver post de %s", $category->name),$category->name);
    endforeach;
    ?>
</ul>
<br>
<br>
<br>


<h3>TAG's da SON</h3>
<ul class="list-group">
    <?php
    $tags = get_tags();
    foreach ($tags as $tag):
//        var_dump($tag);
        printf('<li class="list-group-item"><a href="%s" title="%s">%s</a></li>',
            get_tag_link($tag->term_id),sprintf("Ver posts sobre %s", $tag->name),$tag->name);
    endforeach;
    ?>
</ul>
