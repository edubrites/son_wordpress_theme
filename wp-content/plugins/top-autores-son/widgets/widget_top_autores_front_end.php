<h5>Top Autores:</h5>
<table>
    <tr>
        <th>Nome: </th>
        <th>Posts: </th>
    </tr>

<?php
$dados = get_users(array("orderby"=>'post_count',"order"=>'desc'));

    foreach ($dados as $dado): ?>
    <tr>
        <td><a href="<?php echo get_author_posts_url($dado->id); ?>"> <?php echo $dado->user_nicename; ?></a></td>
        <td><?php echo count_user_posts($dado->id); ?></td>
    </tr>
    <?php endforeach; ?>

</table>
