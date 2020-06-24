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
                <?php if (have_rows('portfolio_list')) : while (have_rows('portfolio_list')) : the_row(); ?>
                        <?php if (have_rows('portfolio_item')) : while (have_rows('portfolio_item')) : the_row();
                                // variables
                                $thumbnail = get_sub_field('thumbnail');
                                $original_image = get_sub_field('original_image');
                        ?>
                                <div class="portfolio-page-grid__item">
                                    <a href="<?php echo $original_image['url']; ?>" class="portfolio-page-grid__link">
                                        <img src="<?php echo $thumbnail['url']; ?>" title="<?php echo $thumbnail['alt']; ?>" caption="<?php echo $thumbnail['description']; ?>">
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('templates-parts/form-home'); ?>

<?php get_footer(); ?>