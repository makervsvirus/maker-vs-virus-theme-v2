<?php get_header(); ?>

<div class="bg-white">
    <div class="clr-row" style="">
        <div class="clr-col clr-col-sm-8 clr-offset-sm-2 mapcol">
        <h1>Alle Hubs</h1>
            <iframe id="maps" src="https://www.google.com/maps/d/embed?mid=1Sc7ZRpHDt-98-SCrfmRuFZNbLtF3I-uf" width="100%" height="700" style="border:none"></iframe>
        </div>
    </div>

    <?php

    $posts = get_posts(array(
        'post_type'         => 'mvv_hub',
        'posts_per_page'    =>  -1,
        'orderby'           => 'title',
        'order'              => 'ASC'
    ));

    ?>

        <div class="clr-row">
            <div class="clr-col-lg-8 clr-offset-lg-2">
                <?php require 'includes/hub-table.php' ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>