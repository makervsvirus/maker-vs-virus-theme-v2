<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <?php if (has_post_thumbnail()) : ?>
        <div class="" style="height: 50vh; background-image: url(<?php echo get_the_post_thumbnail_url(); ?>); background-size: cover; background-position: center;"></div>
    <?php endif; ?>


    <div class="bg-white">

        <div class="clr-row">
            <div class="clr-col clr-col-sm-8 clr-offset-sm-2">

                <h1><?php the_title() ?></h1>
                <p>
                    <?php the_content(); ?>
                </p>

            </div>
        </div>
    </div>

<?php endwhile; ?>


<?php get_footer() ?>