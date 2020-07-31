<?php
/**
 * Template Name: Page template
 *
 */
get_header('page');
?>

<div class="page service-page">
    <nav class="breadcrumbs conteiner" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb__item"> 
                <a class="breadcrumb__link" href="<?php 
                                                    if (get_locale() == 'ar') {
                                                        echo site_url("/ar/حلول-رقمية-فعالة/");
                                                    } else {
                                                        echo site_url();
                                                }?>#services"><?php pll_e('Services'); ?></a>
            </li>
            <li class="breadcrumb__item breadcrumb__item--current" aria-current="page">
                <?php the_title() ?>
            </li>
        </ol>
    </nav>
    <div class="page__content">
        <div class="conteiner">
            <h1 class="page__title"><?php the_title() ?></h1>

            <div class="page__txt">
                <?php the_field('content_text'); ?>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('templates-parts/form-home'); ?>

<?php get_footer(); ?>
