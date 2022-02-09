<?php
    $args = array(
        'post_status'    => 'publish',
        'post_type'      => 'projects',
    );

    $the_projects = new WP_Query($args);
?>

<section id="s-projects">
    <div class="grid-layout">
        <h2 class="delaySmallReveal"><?php echo get_theme_mod('set_projects_title');?><span class="typewriter"></span></h2>
        <div id="projects">
            <?php if ( $the_projects->have_posts() ) : while ( $the_projects->have_posts() ) : $the_projects->the_post(); ?>
                <article class="intervalCardReveal project" style="background-image:url('<?php echo esc_url(get_field('image')); ?>')">
                    <a href="<?php echo esc_url(get_field('url')); ?>" target="_blank">
                        <div class="desc">
                            <h3><?php echo get_the_title(); ?></h3>
                            <p><?php echo get_field('description'); ?></p>
                        </div>
                    </a>
                </article>
            <?php endwhile; endif; wp_reset_postdata();?>
        </div>
    </div>
</section>