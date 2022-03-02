<section id="s-contact">
  <div class="grid-layout">
    <div id="contact">
      <article id="contact-title">
          <h2 class="delaySmallReveal"><span class="typewriter"><?php echo get_theme_mod('set_contact_title');?></span></h2>
      </article>
      <article id="contact-form">
        <div id="contact-img">
          <img src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('set_contact_img')));?>" alt="image_contato">
          <div id="widgets">
            <?php if(is_active_sidebar( 'bottom-widgets' )): ?>
              <?php dynamic_sidebar( 'bottom-widgets' ); ?>
            <?php endif; ?>  
          </div>
        </div>
        <?php echo do_shortcode('[wpforms id="'. get_theme_mod( 'set_contact_form' ) .'"]');?>
      </article>
    </div>
  </div>
</section>