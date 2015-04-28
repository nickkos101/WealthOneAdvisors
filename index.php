<?php get_header(); ?>
<main>
    <div class="slider-wrap">
            <!--
            <div class="call-to-action">
                <h2>5 Ways to Retire Early</h2>
                <div class="btn">Download Whitepaper</div>
            </div> -->
            <section class="slider">
                <div class="slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/downtown.jpg">
                </div>
            </section>
            <div class="overlay">
                <img src="<?php echo get_template_directory_uri(); ?>/images/slogan.png">
            </div>
        </div>
        <section class="banner-action">
            <div class="banner-border">
                <div class="container">
                    <div class="banner-text">
                        <p>Our client relationships are held to a higher standard. We work with you personally to help achieve your financial goals. Let's build your future together.</p>
                        <a class="btn" href="#readmore">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="offset" id="readmore"></div>
        <section class="site-options">
            <div class="col-wrap">
                <div class="column third">
                    <div class="options-square taligncenter">
                        <h1><a href="/who-we-are/">Who We Are</a></h1>
                        <p>WealthOne Advisors was founded with the goal of assisting our clients in every aspect of their financial lives.</p>
                        <div class="btn"><a href="/who-we-are/">Learn More</a></div>
                    </div>
                </div>
                <div class="column third">
                    <div class="options-square taligncenter no-side-border">
                        <h1><a href="/why-were-different/">Why We're Different</a></h1>
                        <p>Our staff consists of experienced professionals with a “hands on” approach to financial guidance.</p>
                        <div class="btn"><a href="/why-were-different/">Learn More</a></div>
                    </div>
                </div>
                <div class="column third">
                    <div class="options-square taligncenter">
                        <h1><a href="/what-we-do">What We Do</a></h1>
                        <p>Investments, Financial Planning, Insurance, Retirement Planning, we assist our clients in every aspect of their financial lives.</p>
                        <div class="btn"><a href="/what-we-do">Learn More</a></div>
                    </div>
                </div>
            </div>
        </section>
                    <!--
        <section class="paralax">
            <div class="jumbotron">
            </div>
        </section>
        <section class="paralax solid white">
            <div class="jumbotron">
                <div class="container">
                    <div class="content">
                        <h2 class="talignleft">Who We Are</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="paralax">
                <div class="jumbotron">
                </div>
            </section>
            <section class="paralax solid">
                <div class="jumbotron">
                    <div class="container">
                        <div class="content">
                            <h2 class="talignleft">Why We're Different!</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="paralax">
                    <div class="jumbotron">
                    </div>
                </section>
                <section class="paralax solid white">
                    <div class="jumbotron">
                        <div class="container">
                            <div class="content">
                                <h2 class="talignleft">What We Do</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                -->
                <section class="process-panel">
                    <div class="city-bg">
                        <div class="dashed-pattern">
                            <div class="col-wrap">
                                <div class="column full">
                                    <div class="process-info">
                                        <p class="areafocus"><span class="afText">Our Thoughts <span class="title2nd"><i>and Insights</i></span></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-wrap">
                            <?php query_posts(array('posts_per_page' => 3, 'post_type' => 'resources')); ?>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div class="column third dashed-border video-piece">
                                <div class="video-col taligncenter">
                                    <div class="videoTitleHeader"><?php the_title(); ?></div>
                                    <div class="videoImage">
                                     <?php 
                                     if ( has_post_thumbnail() ) {
                                        the_post_thumbnail();
                                    } 
                                    ?>
                                </div>
                                <div class="callOutSubContent videoContent">
                                 <?php the_excerpt(); ?>
                             </div>
                             <div class="btn"><a href="<?php the_permalink(); ?>">Learn More</a></div>
                         </div>
                     </div>
                 <?php endwhile; endif; ?>

                 <div class="container blog-preview">
                    <div class="col-wrap taligncenter">
                       <?php query_posts(array('posts_per_page' => 3, 'post_type' => 'post')); ?>
                       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                       <div class="column third">
                        <div class="blog-box">
                            <h2 class="blog-title"><?php the_title(); ?></h2>
                            <div class="blog-summary"><?php the_excerpt(); ?></div>
                            <div class="btn read-more"><a href="<?php the_permalink(); ?>">Read More</a></div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>

    </div>
</div>
</section>
<!--<section class="social-news">
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
</section>-->
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