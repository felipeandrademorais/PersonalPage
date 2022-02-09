<section id="s-about">
  <div class="grid-layout">
    <div id="about">
      <article id="about-text">
        <h2 class="delaySmallReveal"> <?php echo get_theme_mod('set_about_title'); ?><span class="typewriter"></span></h2>
        <p class="delayMediumReveal">
          <?php echo get_theme_mod('set_about_description');?>
        </p>
      </article>
      <div id="about-img">

        <svg class="about-blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <mask id="mask0" mask-type="alpha">
                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
            </mask>
            <g mask="url(#mask0)">
                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                <image class="about-blob-img" href="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('set_about_img')));?>"/>
            </g>
        </svg> 

        <!-- <img class="delayMediumReveal" src="<?php //echo esc_url(wp_get_attachment_url(get_theme_mod('set_about_img')));?>" alt="image_about"> -->
      </div>
    </div>
  </div>
</section>