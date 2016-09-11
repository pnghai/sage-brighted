<article <?php post_class(); ?>>
  <a href="<?php the_permalink(); ?>" class="sp-results-pic">
    <?php the_post_thumbnail("thumbnail");?>
  </a>
  <div class="sp-results-inner">
    <header>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php if (get_post_type() === 'post') { get_template_part('templates/entry-meta'); } ?>
    </header>
    <div class="entry-summary">
      <a href="<?php the_permalink(); ?>">
        <?php echo get_the_excerpt(); ?>
      </a>
    </div>
  </div>
</article>
