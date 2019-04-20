<footer class="page-footer bg-overlayed" role="contentinfo"
    <?php if (get_field('footer_background', 'options')) : ?>
        style="background-image: url('<?= get_field('footer_background', 'options'); ?>');"
    <?php endif; ?>>

    <div class="page-container">

        <div class="row">
            <div class="col">
                <?php
                if (get_field('logo', 'options')) : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <img src="<?= get_field('logo', 'options') ?>" alt="tajam-logo">
                    </a>
                <?php endif; ?>
                <div class="text-block">
                    <?= get_field('footer_text_block', 'options'); ?>
                </div>
            </div>
            <div class="col">
                <span class="page-footer--title"><?= get_field('our_studio_title', 'options') ?></span>
                <span class="icon fas fa-map-marker-alt"><?= get_field('our_address', 'options') ?></span>

                <?php if (have_rows('our_phone', 'options')): ?>
                    <?php while (have_rows('our_phone', 'options')) : the_row();
                        $number = get_sub_field('phone_number');
                        ?>
                        <a href="tel:<?= $number; ?>" class="icon fas fa-phone"><?= $number; ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col">
                <span class="page-footer--title"><?= get_field('stay_in_touch_title', 'options') ?></span>
                <form action="#" class="subscribe-form">
                    <input type="email" placeholder="Subscribe our newsletter">
                    <input type="submit" value=" ">
                </form>
                <div class="socials-buttons">

                    <?php if (get_field('facebook-link', 'options')):
                        $link = get_field('facebook-link', 'options');
                        ?>
                        <a href="<?= $link; ?>" class="icon fab fa-facebook-f" target="_blank"></a>
                    <?php endif; ?>

                    <?php if (get_field('twitter-link', 'options')):
                        $link = get_field('twitter-link', 'options');
                        ?>
                        <a href="<?= $link; ?>" class="icon fab fa-twitter" target="_blank"></a>
                    <?php endif; ?>

                    <?php if (get_field('dribbble-link', 'options')):
                        $link = get_field('dribbble-link', 'options');
                        ?>
                        <a href="<?= $link; ?>" class="icon fab fa-dribbble" target="_blank"></a>
                    <?php endif; ?>

                    <?php if (get_field('instagram-link', 'options')):
                        $link = get_field('instagram-link', 'options');
                        ?>
                        <a href="<?= $link; ?>" class="icon fab fa-instagram" target="_blank"></a>
                    <?php endif; ?>

                    <?php if (get_field('google-link', 'options')):
                        $link = get_field('google-link', 'options');
                        ?>
                        <a href="<?= $link; ?>" class="icon fab fa-google-plus-g" target="_blank"></a>
                    <?php endif; ?>

                    <?php if (get_field('youtube-link', 'options')):
                        $link = get_field('youtube-link', 'options');
                        ?>
                        <a href="<?= $link; ?>" class="icon fab fa-youtube" target="_blank"></a>
                    <?php endif; ?>

                </div>
            </div>
        </div>


        <div class="row row--navigation">
            <nav class="footer-nav">
                <?php wp_nav_menu(array(
                    'theme_location' => 'menu-footer',
                    'menu_class' => 'footer-nav--list',
                    'container' => false));
                ?>
            </nav>
            <p class="copyright"><?= get_field('copyright_text', 'options') ?></p>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
