<?php
get_header();

get_header('personalizado');
?>

<div class="container">
    <h1>404 Error Page</h1>
    <div class="row">
        <div class="col-md-9">
            <p>Ops!! Esta página não existe.</p>
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

    