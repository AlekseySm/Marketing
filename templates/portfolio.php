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
                    <a href="<?php echo get_template_directory_uri(); ?>/images/portfolio/1.jpg" class="portfolio-page-grid__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/1.jpg" alt="">
                    </a>
                </div>
                <div class="portfolio-page-grid__item">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/portfolio/2.jpg" class="portfolio-page-grid__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/2.jpg" alt="">
                    </a>
                </div>
                <div class="portfolio-page-grid__item">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/portfolio/3.jpg" class="portfolio-page-grid__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/3.jpg" alt="">
                    </a>
                </div>
                <div class="portfolio-page-grid__item">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/portfolio/7.jpg" class="portfolio-page-grid__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/7.jpg" alt="">
                    </a>
                </div>
                <div class="portfolio-page-grid__item">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/portfolio/8.jpg" class="portfolio-page-grid__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/8.jpg" alt="">
                    </a>
                </div>
                <div class="portfolio-page-grid__item">
                    <a href="<?php echo get_template_directory_uri(); ?>/images/portfolio/11.jpg" class="portfolio-page-grid__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/11.jpg" alt="">
                    </a>
                </div>


            </div>
        </div>
    </div>
</div>
<?php get_template_part('templates-parts/form-home'); ?>

<?php get_footer(); ?>