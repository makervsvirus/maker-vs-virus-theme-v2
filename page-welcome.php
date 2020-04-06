<?php get_header(); ?>


<section class="hero">

  <div class="clr-row">
    <div class="clr-col-12">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/big-logo.svg" style="height:400px; max-width:80vw; max-height: 60vh; margin-bottom: 40px" />
    </div>

    <div class="clr-col clr-col-sm-6 clr-offset-sm-3">
      <?php bloginfo('description'); ?>
    </div>

    <div class="clr-col clr-col-sm-6 clr-offset-sm-3">
      Bitte beachte: Wir führen nur Iniativen auf, die ihre (selbst) produzierten Artikel kostenlos oder zum Selbstkostenpreis anbieten.
    </div>

    <div class="clr-col clr-col-sm-6 clr-offset-sm-3">
      <a target="_blank" href="https://twitter.com/search?q=%23makervsvirus" class="hero">#MakerVsVirus</a>
    </div>
  </div>
</section>

<div class="bg-white">
  <div class="clr-row">

    <?php $about_hubs = get_page_by_path('about_hubs'); ?>
    <div class="clr-col clr-col-sm-4 clr-offset-sm-2">
      <div class="card">
        <div class="card-img">
          <img src="<?php echo get_the_post_thumbnail_url($about_hubs); ?>">
        </div>
        <div class="card-block" style="height:200px">
          <div class="card-title">
            <?php echo get_the_title($about_hubs); ?>
          </div>
          <div class="card-text">
            <?php
            $content_hubs = apply_filters('the_content', $about_hubs->post_content);
            $content_hubs = htmlentities($content_hubs, null, 'utf-8');
            $content_hubs = str_replace("&nbsp;", " ", $content_hubs);
            $content_hubs = html_entity_decode($content_hubs);
            echo $content_hubs;
            ?>
          </div>
        </div>
        <div class="card-footer">
          <a href="/hub-registration">
            <button class="btn btn-sm btn-link">Hub registrieren</button>
          </a>
        </div>
      </div>
    </div>

    <?php $about_makers = get_page_by_path('about_makers'); ?>
    <div class="clr-col clr-col-sm-4">
      <div class="card">
        <div class="card-img">
          <img src="<?php echo get_the_post_thumbnail_url($about_makers); ?>">
        </div>
        <div class="card-block" style="height:200px">
          <div class="card-title">
            <?php echo get_the_title($about_makers); ?>
          </div>
          <div class="card-text">
            <?php
            $content_makers = apply_filters('the_content', $about_makers->post_content);
            $content_makers = htmlentities($content_makers, null, 'utf-8');
            $content_makers = str_replace("&nbsp;", " ", $content_makers);
            $content_makers = html_entity_decode($content_makers);
            echo $content_makers;
            ?>
          </div>
        </div>
        <div class="card-footer">
          <!-- <a href="/maker-registration"> -->
            <button class="btn btn-sm btn-link" disabled>Maker registrieren (noch nicht verfügbar)</button>
          <!-- </a> -->
        </div>
      </div>
    </div>



  </div>
  <div class="clr-row">
    <div class="clr-col clr-col-sm-8 clr-offset-sm-2">

      <?php $page_i_need_material = get_page_by_path('i_need_material'); ?>
      <div class="card">
        <div class="card-img">
          <img src="<?php echo get_the_post_thumbnail_url($page_i_need_material);  ?>" style="  object-fit: cover; height: 20vh;">
        </div>
        <div class="card-block">
          <div class="card-title">
            <?php echo get_the_title($page_i_need_material); ?>
          </div>
          <div class="card-text">
            <?php
            $content = apply_filters('the_content', $page_i_need_material->post_content);
            $content = htmlentities($content, null, 'utf-8');
            $content = str_replace("&nbsp;", " ", $content);
            $content = html_entity_decode($content);
            echo $content;
            ?>
          </div>
        </div>
        <div class="card-footer">
          <!-- <button class="btn btn-sm btn-link">Footer Action 1</button>
          <button class="btn btn-sm btn-link">Footer Action 2</button> -->
        </div>
      </div>

    </div>


  </div>

  <div class="clr-row" style="margin-top: 2rem;">
    <div class="clr-col">

    <iframe src="https://www.google.com/maps/d/embed?mid=1Sc7ZRpHDt-98-SCrfmRuFZNbLtF3I-uf" width="100%" height="700"></iframe>

      <?php // $show_makers = true; ?>
      <?php // include 'includes/map.php' ?>

    </div>
  </div>



  <div class="clr-row">
    <div class="clr-col clr-col-sm-8 clr-offset-sm-2">
      <?php while (have_posts()) : the_post(); ?>
      <div class="card">
        <div class="card-block">

        <h1><?php the_title() ?></h1>
        <p>
          <?php the_content(); ?>
        </p>
    </div></div>
      <?php endwhile; ?>
    </div>
  </div>
</div>



<?php get_footer() ?>