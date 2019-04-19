<?php
/*
 * Template Name: Homepage template
 */
?>
<?php get_header(); ?>

<main id="main" class="page-main" role="main">

    <section id="home" class="hero-section bg-overlayed"
        <?php if (get_field('background_hero_section')) : ?>
            style="background-image: url('<?= get_field('background_hero_section'); ?>');"
        <?php endif; ?>>

        <?php if (have_rows('slider_in_hero_section')): ?>
            <div class="hero-section--slider">
                <?php
                while (have_rows('slider_in_hero_section')) : the_row();
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                    $link = get_sub_field('link');
                    ?>
                    <div class="hero-section--slider-item">
                        <div>
                            <h1 class="title"><?= $title; ?></h1>
                            <p class="description"><?= $description; ?></p>
                        </div>
                        <?php if($link) : ; ?>
                        <a href="<?= $link; ?>" class="btn">Learn more</a>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <? endif; // end loop slider?>

    </section>

    <section class="our-story" id="about">
        <div class="our-story--inner">

            <div class="our-story--image-wrapper">
                <img src="<?= get_field('our-story-image'); ?>" alt="">
            </div>
            <div class="our-story--description-wrapper">
                <h2><?= get_field('our_story'); ?></h2>

                <?= get_field('our-story-text'); ?>
                <a href="<?= get_field('our-story-link'); ?>" class="btn">learn more</a>
            </div>
        </div>

    </section>

    <section class="our-video bg-overlayed"
        <?php if (get_field('background_our_video_section')) : ?>
            style="background-image: url('<?= get_field('background_our_video_section'); ?>');"
        <?php endif; ?>>
        <div style="height: 400px;"></div>

    </section>
    <section id="expertise">
        <div style="height: 300px;"></div>
    </section>
    <section id="teams">
        <div style="height: 300px;"></div>
    </section>
    <section id="works">
        <div style="height: 300px;"></div>
    </section>
    <section id="people-say">
        <div style="height: 300px;"></div>
    </section>
    <section id="contact">
        <div style="height: 300px;"></div>
    </section>

</main>

<?php get_footer(); ?>
