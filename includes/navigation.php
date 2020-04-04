<header class="header header-6">
    <div class="branding">
        <a href="/" class="nav-link">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg" style="height: 40px; margin-right: 1rem;" />
            <span class="title">Maker vs Virus</span>
        </a>
    </div>
    <div class="header-nav">

        <?php
        $menu_name = 'header-menu';
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menuitems = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));

        foreach ($menuitems as $item) :
            $title = $item->title;
            $link = $item->url;
        ?>

            <a href="<?php echo $link; ?>" class="nav-link"><span class="nav-text"><?php echo $title; ?></span></a>

        <?php endforeach; ?>

    </div>
    <div class="header-actions" style="margin-right: 1rem;">
        <?php if (is_user_logged_in()) : ?>
            <a href="/wp-admin" class="nav-link" aria-label="settings">
                Zum Dashboard
            </a>
        <?php else : ?>
            <a href="/wp-admin" class="nav-link" aria-label="settings">
                Login
            </a>
        <?php endif; ?>
    </div>
</header>