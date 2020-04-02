<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <?php if (has_post_thumbnail()) : ?>
        <div class="" style="height: 50vh; background-image: url(<?php echo get_the_post_thumbnail_url(); ?>); background-size: cover; background-position: center;"></div>
    <?php endif; ?>


    <div class="bg-white">
        <div class="clr-row">
            <div class="clr-col clr-col-sm-8 clr-offset-sm-2">
                <h1><?php the_title() ?></h1>
            </div>
        </div>



        <div class="clr-row">
            <div class="clr-col-lg-3 clr-col-md-4 clr-col-12 clr-offset-sm-2">
                <div class="card">
                    <div class="card-header">
                        Kontakt
                    </div>
                    <div class="card-block">
                        <div class="card-text">
                            <?php echo get_post_meta($post->ID, 'hub_contact_person', true) ?><br />
                            <?php echo get_post_meta($post->ID, 'hub_email', true) ?><br />
                            <?php echo get_post_meta($post->ID, 'hub_twitter', true) ?><br />
                        </div>
                    </div>
                </div>
            </div>

            <div class="clr-col-lg-3 clr-col-md-4 clr-col-12">
                <div class="card">
                    <div class="card-header">
                        Anschrift
                    </div>
                    <div class="card-block">
                        <div class="card-text">
                            <?php echo get_post_meta($post->ID, 'hub_city', true) ?><br />
                            <?php echo get_post_meta($post->ID, 'hub_state', true) ?><br />
                            <?php echo get_post_meta($post->ID, 'hub_country', true) ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clr-col-lg-3 clr-col-md-4 clr-col-12">
                <div class="card">
                    <div class="card-header">
                        Wir bieten
                    </div>
                    <div class="card-block">
                        <div class="card-text">
                            <?php echo nl2br(get_post_meta($post->ID, 'hub_offer', true)) ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="clr-row">
            <div class="clr-col clr-col-sm-8 clr-offset-sm-2">

                <p>
                    <?php the_content(); ?>
                </p>

            </div>
        </div>
    </div>

<?php endwhile; ?>


<?php get_footer() ?>