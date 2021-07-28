<!DOCTYPE html>
<html <?php language_attributes();?> >
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <?php wp_head();?>
</head>
<body  <?php body_class();?> >

<header id="main-header">
    <a href="<?php echo home_url( '/' ) ?>">
        <h1>la fourmi-e</h1>
    </a>
</header>

<main id="main-content">

<?php wp_body_open();?>