<article <?php post_class(); ?>>
  <a href="<?php the_permalink(); ?>">
    <figure>
      <?php the_post_thumbnail("home-thumbnail");?>
    </figure>
  </a>
  <header>
    <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  </header>
  <div class="entry-summary">
    <a href="<?php the_permalink(); ?>">
      <?php echo get_the_excerpt(); ?>
    </a>
  </div>
  <div class="entry-stats">
    <a href="<?php the_permalink(); ?>">
      <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 1234
    </a>
  </div>
</article>