<?php get_header(); ?>

<div class="bg-white">



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

                    <?php require 'includes/hub-table.php' ?>

                </div>
            </div>

        </div>
    </div>
</div>


<?php get_footer(); ?>