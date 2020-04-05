<?php get_header(); ?>

<div class="bg-white">

    <div class="clr-row" style="">
        <div class="clr-col">
            <iframe src="https://www.google.com/maps/d/embed?mid=1Sc7ZRpHDt-98-SCrfmRuFZNbLtF3I-uf" width="100%" height="700"></iframe>
        </div>
    </div>


    <?php // require 'includes/map.php' 
    ?>


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