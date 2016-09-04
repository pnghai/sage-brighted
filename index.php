<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>
<div class="grid" data-masonry='{ "itemSelector": ".post", "columnWidth": ".grid-sizer" , "percentPosition": "true"}' >
  <div class="grid-sizer"></div>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>
  <aside class="home-sidebar">
    <?php dynamic_sidebar("home-sidebar");?>
  </aside>
</div>
<?php the_posts_navigation(); ?>
