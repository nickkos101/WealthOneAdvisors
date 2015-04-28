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
                    <p class="breadcrumbs"> <a href="<?php echo get_post_type_archive_link( 'resources' ); ?>">Resources</a> / <?php the_title(); ?></p>
                    <?php the_content(); ?>
                </div>
            <?php endwhile; endif; ?>
            <div class="sidebar column third">
                <img src="http://staging.inspyregroup.com/wealthone/wp-content/themes/wealthone/images/talktous.jpg">
                <h2>Let's Work Together</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <input type="text">
                <textarea></textarea>
                <input type="submit">
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