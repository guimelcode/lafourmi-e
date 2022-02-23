<!DOCTYPE html>
<html <?php language_attributes();?> >
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icon/favicon.ico" sizes="any" />
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icon/apple-touch-icon.png">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-32.png" type="image/png" sizes="32x32" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-72.png" type="image/png" sizes="72x72" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-96.png" type="image/png" sizes="96x96" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-128.png" type="image/png" sizes="128x128" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-144.png" type="image/png" sizes="144x144" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-152.png" type="image/png" sizes="152x152" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-192.png" type="image/png" sizes="192x192" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-384.png" type="image/png" sizes="384x384" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-512.png" type="image/png" sizes="512x512" />
    <?php wp_head();?>
</head>
<body  <?php body_class();?> >

<header id="main-header" class="segment">
    <!-- <a href="<?php echo home_url('/') ?>" id="site-header-home">
        <h1>la fourmi-e</h1>
    </a> -->
    <div id="site-header-home" class="site-title">
        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <img src="<?php header_image();?>" width="<?php echo absint(get_custom_header()->width); ?>" height="<?php echo absint(get_custom_header()->height); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
        </a>
    </div>
    <nav class="main-nav">

    <?php wp_nav_menu(
    array(
        'theme_location' => 'main',
        'container' => 'ul',
        'menu_class' => 'nav-header-wrapper',
    )
);?>
        <button class="main-nav-button">&darr;</button>
    </nav>
</header>

<main id="main-content">

<?php wp_body_open();?>