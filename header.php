<!DOCTYPE html>
<html <?php language_attributes();?> >
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <?php wp_head();?>
</head>
<body  <?php body_class();?> >

<header id="main-header" class="segment">
    <a href="<?php echo home_url( '/' ) ?>" id="site-header-home">
        <h1>la fourmi-e</h1>
    </a>
    <nav class="main-nav">

    <?php wp_nav_menu( 
        array(
            'theme_location' => 'main', 
            'container' => 'ul', 
            'menu_class' => 'nav-header-wrapper',
            )
    ); ?>
        <button class="main-nav-button">&darr;</button>
    </nav>
</header>

<main id="main-content">

<?php wp_body_open();?>