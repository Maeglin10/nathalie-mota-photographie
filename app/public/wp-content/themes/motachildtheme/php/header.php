<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container">
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <img src="app/public/wp-content/themes/motachildtheme/img/logo.png" alt="Logo">
            </a>
        </div>
        <nav class="main-navigation">
            <ul>
                <li><a href="<?php echo home_url(); ?>">Accueil</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('a-propos')); ?>">À propos</a></li>
                <li><a href="#contactModal" data-toggle="modal">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
