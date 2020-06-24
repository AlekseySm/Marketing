<?php

/**
 * Template Name: Portfolio
 *
 */
get_header('page');
?>

<div class="page service-page">
    <div class="page__content">
        <div class="conteiner">
            <h1 class="page__title"><?php the_title() ?></h1>
            <div class="portfolio-page-grid">
                <div class="portfolio-page-grid__item">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/portfolio/original/1.jpg" class="portfolio-page-grid__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/1.jpg" alt="Заголовок">
                    </a>
                </div>
                <div class="portfolio-page-grid__item">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/portfolio/original/2.jpg" class="portfolio-page-grid__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/2.jpg" alt="Заголовок2">
                    </a>
                </div>
                <div class="portfolio-page-grid__item">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/portfolio/original/3.jpg" class="portfolio-page-grid__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/3.jpg" alt="Заголовок3">
                    </a>
                </div>
                <div class="portfolio-page-grid__item">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/portfolio/original/5.jpg" class="portfolio-page-grid__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/5.jpg" alt="Заголовок4">
                    </a>
                </div>
                <div class="portfolio-page-grid__item">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/portfolio/original/7.jpg" class="portfolio-page-grid__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/7.jpg" alt="Заголовок5">
                    </a>
                </div>
                <div class="portfolio-page-grid__item">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/portfolio/original/8.jpg" class="portfolio-page-grid__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/8.jpg" alt="Заголовок6">
                    </a>
                </div>
                <div class="portfolio-page-grid__item">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/portfolio/original/11.jpg" class="portfolio-page-grid__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/11.jpg" alt="Заголовок7">
                    </a>
                </div>


            </div>
        </div>
    </div>
</div>
<?php get_template_part('templates-parts/form-home'); ?>

<?php get_footer(); ?>