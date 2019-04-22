<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php get_template_part('template-parts/head'); ?>
</head>

<?php get_template_part('template-parts/preloader'); ?>

<body <?php body_class("page-body"); ?>>

<header class="page-header">

    <div class="page-header--inner">
        <?php
        if (get_field('logo', 'options')) : ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <img src="<?= get_field('logo', 'options') ?>" alt="tajam-logo">
            </a>
        <?php endif; ?>

        <nav class="main-nav" role="navigation">
            <?php wp_nav_menu(array(
                'theme_location' => 'menu-1',
                'menu_class' => 'main-nav__list',
                'container' => false));
            ?>
        </nav>
    </div>

    <div class="js-burger burger-menu">
        <span></span>
        <span></span>
        <span></span>
    </div>

</header>
