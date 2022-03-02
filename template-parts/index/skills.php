<?php
    $args = array(
        'post_status'    => 'publish',
        'post_type'      => 'skills',
    );

    $the_skills = new WP_Query($args);
?>

<section id="s-skills">
    <div class="grid-layout">
        <div id="skills">
            <article id="skills-title">
                <h2 class="delaySmallReveal"><span class="typewriter"><?php echo get_theme_mod('set_skills_title');?></span></h2>
            </article>
            <div class="skills-container">
            <?php if ( $the_skills->have_posts() ) : while ( $the_skills->have_posts() ) : $the_skills->the_post(); ?>
                    <div id="skills-cards">
                        <article class=" sairCaixa intervalCardReveal">
                            <span class="skills-cards-name-low"><?php echo get_the_title(); ?></span>
                            <img
                                src="<?php  echo esc_url(get_field('icon')); ?>"
                                width="60px"
                                height="60px"
                                alt="ícone do html"
                                class="skills-icons"
                            />
                        </article>
                    </div>
                    <?php endwhile; endif; wp_reset_postdata();?>
            </div>
        </div>
    </div>
</section>