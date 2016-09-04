<header class="banner">
  <div class="container">
    <div class="head-wrapper row">
      <div class="logo">
        <a class="brand" href="<?= esc_url(home_url('/')); ?>" alt="<?php bloginfo('name'); ?>"><img src="http://dummyimage.com/184x37/009c1a/fff.jpg"></a>
      </div>
      <nav class="nav-primary">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif;
        ?>
      </nav>
      <nav class="right-nav">
        <ul class="wrapper list-inline">
          <li><a href="#">Video</a></li>
          <li>
            <?php echo get_search_form();?>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>
