<?php get_header(); ?>
<main class="page resources">
    <section class="process-panel">
        <div class="city-bg">
            <div class="dashed-pattern">
                <div class="col-wrap">
                    <div class="column full">
                        <div class="process-info">
                            <p class="areafocus"><span class="afText">Financial Materials <span class="title2nd"><i>and Resources</i></span></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-wrap taligncenter">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="column third dashed-border video-piece">
                    <div class="video-col taligncenter">
                        <div class="videoTitleHeader"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        <div class="videoImage">
                            <?php 
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                            } 
                            ?>
                        </div>
                        <div class="callOutSubContent videoContent talignleft">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>"><div class="btn">Learn More</div></a>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>
<section class="social-news">
    <div class="container">
        <div class="col-wrap">
            <div class="column half">
                <h2>Social News <small>Stay Connected</small></h2>
            </div>
            <div class="column half talignright">
                <div class="social-buttons">
                    <a href="#" target="_blank" class="socialIcons iconFB" ><img src="<?php echo get_template_directory_uri(); ?>/images/icon_social_fb.png" alt="FaceBook"></a>
                    <a href="#" target="_blank" class="socialIcons iconTW"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_social_tw.png" alt="Twitter"></a>
                    <a href="#" target="_blank" class="socialIcons iconYT"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_social_yt.png" alt="YouTube"></a>
                    <a href="#" target="_blank" class="socialIcons iconLI"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_social_li.png" alt="LinkedIn"></a> 
                </div>
            </div>
        </div>
    </div>
</div>
</section>
                            <!--
                            <section class="partner-bar">
                                <div class="container">
                                    <div class="client-list">
                                        <div class="slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/rep.png">
                                        </div>
                                        <div class="slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/ut-sandiego.png">
                                        </div>
                                        <div class="slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/jfp.png">
                                        </div>
                                        <div class="slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cfp.png">
                                        </div>
                                    </div>
                                </div>
                            </section>
                        -->
                    </main>
                    <?php get_footer(); ?>