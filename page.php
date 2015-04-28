<?php get_header(); ?>
<main class="page">
    <section class="site-content">
        <div class="col-wrap container intContentWrap">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="column full page-title">
                <div class="IntContentHeadline">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="page-content-bg">
                <div class="column two-thirds">
                    <?php the_content(); ?>
                    <!--<div class="tabs">
                      <ul>
                        <li><a href="#tabs-1">Nunc tincidunt</a></li>
                        <li><a href="#tabs-2">Proin dolor</a></li>
                        <li><a href="#tabs-3">Aenean lacinia</a></li>
                    </ul>
                    <div id="tabs-1">
                        <img src="http://staging.inspyregroup.com/wealthone/wp-content/themes/wealthone/images/image-example-1.jpg" />
                        <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
                    </div>
                    <div id="tabs-2">
                        <img src="http://staging.inspyregroup.com/wealthone/wp-content/themes/wealthone/images/image-example-2.jpg" />
                        <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
                    </div>
                    <div id="tabs-3">
                        <img src="http://staging.inspyregroup.com/wealthone/wp-content/themes/wealthone/images/image-example-3.jpg" />
                        <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                        <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
                    </div>
                </div>-->

            </div>
        <?php endwhile; endif; ?>
        <div class="sidebar column third">
            <h2>Contact Us</h2>
            <?php
            if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }
            ?>
        </div>
    </div>
</div>
</section>
<section >
    <div class="container social-news">
        <div class="col-wrap">
            <div class="column half">
                <h2 class="social-header">Social News <small>Stay Connected</small></h2>
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
</main>
<?php get_footer(); ?>