      <footer>
        <div class="grid-layout">
          <p id="copyright"><?php echo get_theme_mod('set_copyright'); ?></p>
          <div>
            <p>Powered by</p>
            <img
              src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('set_logo')));?>"
              alt="logo felipemorais"
              width="60px"
              height="60px"
            />
          </div>
        </div>
      </footer>
    </main>
  </body>
  <?php wp_footer(); ?>
</html>
