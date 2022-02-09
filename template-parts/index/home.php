<section id="s-home">
    <div class="grid-layout">
        <div id="home">
            <div id="home-container-text">
                <h2 class="delaySmallReveal">
                    <?php echo get_theme_mod('set_primeira_linha');?><br />
                    <span id="home-name"><?php echo get_theme_mod('set_segunda_linha');?></span><br />
                    <span class="typewriter">
                        <?php echo get_theme_mod('set_terceira_linha');?>
                    </span>
                </h2>
                <?php if ( is_active_sidebar( 'home-widgets' ) ) { ?>
                    <div class="delaySmallReveal home-widgets">
                    <?php dynamic_sidebar( 'home-widgets' ); ?>
                </div>
                <?php } ?>
            </div>
            <div id="home-container-img">
                <div id="home-img">
                </div>
            </div>
        </div>
    </div>
</section>