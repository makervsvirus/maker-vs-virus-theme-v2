<?php get_header(); ?>

<?php require 'includes/navigation.php' ?>


<?php require 'includes/map.php' ?>


<?php

$posts = get_posts(array(
    'post_type'         => 'mvv_hub',
    'posts_per_page'    =>  -1,
    'orderby'           => 'title',
    'order'              => 'ASC'
));

?>


<div class="content-container">
    <div class="content-area">
        <div class="clr-row">
            <div class="clr-col-lg-8 clr-offset-lg-2">

                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Ort</th>
                            <th>Wir bieten</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $post) : ?>

                            <tr>
                                <td>
                                    <a href="<?php echo get_permalink() ?>" ><?php echo get_the_title() ?></a>
                                    <br />&nbsp;<br />
                                    
                                    <?php echo get_post_meta($post->ID, 'hub_contact_person', true) ?><br />
                                    <?php echo get_post_meta($post->ID, 'hub_email', true) ?><br />
                                    <?php echo get_post_meta($post->ID, 'hub_twitter', true) ?><br />
                                </td>
                                <td>
                                    <?php echo get_post_meta($post->ID, 'hub_city', true) ?><br />
                                    <?php echo get_post_meta($post->ID, 'hub_state', true) ?><br />
                                    <?php echo get_post_meta($post->ID, 'hub_country', true) ?>
                                </td>
                                <td>
                                    <b>Wir bieten</b><br />
                                    <?php echo get_post_meta($post->ID, 'hub_offer', true) ?>

                                    <br />&nbsp;<br />
                                    <b>Kapazitäten</b><br />
                                    <?php echo get_post_meta($post->ID, 'hub_capacity', true) ?>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>


<?php get_footer(); ?>