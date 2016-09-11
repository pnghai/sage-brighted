<?php
if (post_password_required()) {
  return;
}
?>

<section id="comments" class="comments">
  <?php echo do_shortcode('[wpdevart_facebook_comment curent_url="'.get_permalink().'" order_type="social" title_text="Chúng tôi muốn nghe ý kiến của bạn" title_text_color="#000000" title_text_font_size="22" title_text_font_famely="Arial" title_text_position="left" width="100%" bg_color="#d4d4d4" animation_effect="random" count_of_comments="3" ]'); ?>
</section>
