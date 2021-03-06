<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <figure>
      <?php if (has_post_thumbnail()):
        the_post_thumbnail("large");
      endif;?>
    </figure>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
