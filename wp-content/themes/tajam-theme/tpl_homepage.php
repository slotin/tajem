<?php
/*
 * Template Name: Homepage Template
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
                        <?php if ($link) : ; ?>
                            <a href="<?= $link; ?>" class="btn btn--on-dark">Learn more</a>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; // end loop slider?>
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

        <button class="js-play-video">
            <i class="fa fa-play"></i>
        </button>

        <?php if (get_field('our_story_video_section_title')): ?>
            <span class="our-video--title"><?= get_field('our_story_video_section_title'); ?></span>
        <?php endif; ?>

        <div class="popup">
            <div class="overlay"></div>
            <div class="video-container">
                <div id="player"></div>

                <?php if (get_field('youtube_link')):
                    $fullLink = get_field('youtube_link');
                    $youtubeLink = explode("https://www.youtube.com/watch?v=", $fullLink);

                    ?>
                    <script>
                        // 2. This code loads the IFrame Player API code asynchronously.
                        var tag = document.createElement('script');

                        tag.src = "https://www.youtube.com/iframe_api";
                        var firstScriptTag = document.getElementsByTagName('script')[0];
                        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                        // 3. This function creates an <iframe> (and YouTube player)
                        //    after the API code downloads.
                        var player;

                        function onYouTubeIframeAPIReady() {
                            player = new YT.Player('player', {
                                height: '100%',
                                width: '100%',
                                videoId: '<?= $youtubeLink[1]; ?>',
                                events: {
                                    'onStateChange': onPlayerStateChange
                                }
                            });
                        }

                        // 4. The API will call this function when the video player is ready.
                        function onPlayerReady(event) {
                            event.target.playVideo();
                        }

                        // 5. The API calls this function when the player's state changes.
                        //    The function indicates that when playing a video (state=1),
                        //    the player should play for six seconds and then stop.
                        var done = false;

                        function onPlayerStateChange(event) {
                            if (event.data == YT.PlayerState.PLAYING && !done) {
                                done = true;
                            }
                        }

                        function playVideo() {
                            player.playVideo();
                        }

                        function stopVideo() {
                            player.stopVideo();
                        }
                    </script>
                <?php endif; ?>
            </div>
        </div>

    </section>

    <section id="expertise" class="expertise">
        <div class="expertise-container">
            <h2><?= get_field('expertise_title_section'); ?></h2>
            <span class="subtitle"><?= get_field('expertise_subtitle'); ?></span>

            <?php if (have_rows('expertise_tile')): ?>
                <div class="expertise--tile">
                    <?php while (have_rows('expertise_tile')) : the_row();
                        $expertiseTitle = get_sub_field('title');
                        $expertiseIcon = get_sub_field('icon');
                        $expertiseDescription = get_sub_field('description');
                        ?>

                        <div class="expertise--tile-item">
                            <img src="<?= $expertiseIcon; ?>" alt="">
                            <div class="display-flex" style="flex-direction: column">
                                <span class="expertise--tile-title"><?= $expertiseTitle; ?></span>
                                <span class="expertise--tile-description"><?= $expertiseDescription; ?></span>
                            </div>
                        </div>

                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

        </div>
    </section>

    <section id="teams" class="meet-the-team bg-overlayed"
        <?php if (get_field('team_background_section')) : ?>
            style="background-image: url('<?= get_field('team_background_section'); ?>');"
        <?php endif; ?>>
        <div class="meet-the-team--container">
            <h2><?= get_field('team_title_section'); ?></h2>
            <span class="subtitle"><?= get_field('team_subtitle'); ?></span>
            <?php
            $args = array(
                'posts_per_page' => 50,
                'post_type' => 'team',
                'order' => 'ASC',
                'orderby' => 'title'
            );
            $query = new WP_Query($args);
            ?>

            <?php if ($query->have_posts()) : ?>
            <div class="meet-the-team--list">
                <?php while ($query->have_posts()) : ?>
                    <?php
                    $query->the_post();
                    $nameMember = get_the_title();
                    $photoMember = get_the_post_thumbnail_url();
                    $positionMember = get_field('member_position');
                    ?>
                    <div class="meet-the-team--item">
                        <img src="<?= $photoMember; ?>" alt="<?= $nameMember; ?>">
                        <span class="name"><?= $nameMember; ?></span>
                        <span class="position"><?= $positionMember; ?></span>
                    </div>
                <?php endwhile;
                wp_reset_query();
                endif; ?>
            </div>

            <?php if (get_field('text_after_list_members')): ?>
                <p><?= get_field('text_after_list_members'); ?></p>
            <?php endif; ?>

            <?php if (get_field('hiring_button_link')): ?>
                <a class="btn btn--on-dark"
                   href="<?= get_field('hiring_button_link'); ?>"><?= get_field('hiring_button_label'); ?></a>
            <?php endif; ?>

        </div>
    </section>

    <section id="works" class="our-works">
        <div class="our-works--header">
            <h2>Our works</h2>
            <a href="#" class="see-all">See All Project in dribbble <i class="fas fa-chevron-right"></i></a>
        </div>
        <?php
        $args = array(
            'posts_per_page' => 24,
            'post_type' => 'our-works',
            'order' => 'ASC',
        );
        $query = new WP_Query($args);
        ?>

        <?php if ($query->have_posts()) : ?>
            <div class="our-works--container">
                <?php while ($query->have_posts()) : ?>
                    <?php
                    $query->the_post();
                    $photoWork = get_the_post_thumbnail_url();
                    $nameWork = get_the_title();
                    $linkWork = get_post_permalink();
                    ?>
                    <div class="our-works--item" style="background-image: url('<?= $photoWork; ?>');"></div>

                <?php endwhile;
                wp_reset_query(); ?>
            </div>

            <div class="text-center">
                <a href="#" class="btn load-more">load more</a>
            </div>
        <?php endif; ?>
    </section>

    <section id="people-say" class="testimonials bg-overlayed"
        <?php if (get_field('background_testimonials_section')) : ?>
            style="background-image: url('<?= get_field('background_testimonials_section'); ?>');"
        <?php endif; ?>>
        <div class="testimonials--container">
            <?php
            $args = array(
                'posts_per_page' => 24,
                'post_type' => 'testimonials',
                'order' => 'ASC',
            );
            $query = new WP_Query($args);
            ?>

            <?php if ($query->have_posts()) : ?>
                <div class="testimonials--texts">
                    <?php while ($query->have_posts()) : ?>
                        <?php
                        $query->the_post();
                        $nameTestimonial = get_the_title();
                        $linkWork = get_post_permalink();
                        $positionTestimonial = get_field('position');
                        $textTestimonial = get_the_content();
                        ?>
                        <div class="testimonials--item">
                            <div class="testimonials--item-text"><?= $textTestimonial; ?></div>
                            <div>
                                <span class="name"><?= $nameTestimonial; ?></span>
                                <span class="position"><?= $positionTestimonial; ?></span>
                            </div>
                        </div>

                    <?php endwhile;
                    wp_reset_query(); ?>
                </div>

                <div class="testimonials--nav">
                    <?php while ($query->have_posts()) : ?>
                        <?php
                        $query->the_post();
                        $photoTestimonial = get_the_post_thumbnail_url();
                        $nameTestimonial = get_the_title();
                        ?>
                        <div class="testimonials--nav-item">
                            <img src="<?= $photoTestimonial; ?>" alt="<?= $nameTestimonial; ?>">
                        </div>

                    <?php endwhile;
                    wp_reset_query(); ?>
                </div>

            <?php endif; ?>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="contact--container">
            <?php
            if (get_field('show_contact_form') == true): ?>
                <div class="contact--column contact--column_form">
                    <?php
                    $posts = get_field('select_contact_form');
                    if ($posts):
                        foreach ($posts as $p): // variable must NOT be called $post (IMPORTANT)
                            $cf7_id = $p->ID;
                            $titleForm = $p->post_title;
                            $shortcodeText = do_shortcode('[contact-form-7 id="' . $cf7_id . '" ]'); ?>
                            <h2><?= $titleForm; ?></h2>
                            <?= $shortcodeText; ?>
                        <?php endforeach;
                    endif; ?>
                </div>
            <?php endif; ?>

            <div class="contact--column contact--column_clients">
                <h2><?= get_field('our_clients_section_title'); ?></h2>

                <?php if (have_rows('clients_list')): ?>
                    <div class="contact--our-clients">
                        <?php while (have_rows('clients_list')) : the_row();
                            $expertiseLink = get_sub_field('link');
                            $expertiseLogo = get_sub_field('logo');
                            ?>

                            <img src="<?= $expertiseLogo; ?>" alt="">

                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>
