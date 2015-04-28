<!DOCTYPE html>
<html>
<head>
    <title><?php wp_title('') ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/responsive.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>
<body id="top">
    <?php
    if (is_home() | is_page_template( 'template-home.php')){
        echo '<header>';

    }
    else {
        echo '<header class="page-content">';
    }
    ?>
    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
    <nav>
        <div class="gold-border">
            <div class="container">
                <div class="col-wrap">
                    <div class="column full taligncenter">
                        <?php wp_nav_menu(array('theme_location' => 'Header_Nav',)); ?>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</nav>
<div class="resp-menu col-wrap">
    <div class="column two-thirds">
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
    </div>
    <div class="column third talignright">
        <i style="color:#fff; font-size:27px; padding-top:20px; padding-right:10px;" class="fa fa-bars"></i>
    </div>
    <nav>
        <?php wp_nav_menu(array('theme_location' => 'Header_Nav',)); ?>
    </nav>
</div>
</header>