<?php
get_header();

get_header('personalizado');
?>
<h1>Posts da tag - <?php single_tag_title(); ?></h1>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <?php
            if (have_posts()):
                echo "<ul class='media-list'>";
                while (have_posts()): the_post();
                    $image = "";
                    if (has_post_thumbnail()) {
                        $image = sprintf('<div class="media-left"><a href="%s">%s</a></div>', get_the_permalink(), get_the_post_thumbnail());
                    }

                    $body = sprintf('<div class="media-body"><h3 class="media-heading"><a href="%s"> %s</a> </h3> <p>%s</p> </div>', get_the_permalink(), get_the_title(), get_the_content('Continue lendo...'));

                    printf("<li class='media'>%s %s</li>", $image, $body);
                endwhile;
                echo "</ul>";
            else:
                echo "<p>Ainda não temos posts para esta categoria</p>";
            endif;
            ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>


<?php

//get_footer('personalizado');
get_footer();
?>

    