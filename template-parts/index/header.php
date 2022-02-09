<header>
  <div class="grid-layout">
    <nav>
      <?php
        if ( function_exists( 'the_custom_logo' ) ) {
          the_custom_logo();
        }
      ?>
      <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-list">
        <?php 
          wp_nav_menu(
              array(
                  'theme_location'  => 'main_menu',
                  'menu_class'      => 'nav-list',
              )
          )
        ?>
      </ul>
    </nav>
  </div>
</header>