<?php
get_template_part('head');
?>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="main">
    <header class="header header--fixed">
        <div class="conteiner">
            <div class="header__wrapper">
                <a href="<?php echo site_url();?>" class="header__logo"><?php the_field('logo_first', 'options'); ?> <?php the_field('logo_second', 'options'); ?>
                    <span><?php the_field('logo_third', 'options'); ?></span></a>
                <nav class="header__nav">
                    <ul class="nav-list js-nav" id="nav-block">
                        <li class="nav-list__item">
                            <a href="<?php echo site_url(); ?>/#services" class="nav-list__link js-menu-toggle">
                                Services
                            </a>
                        </li>
                        <li class="nav-list__item">
                            <a href="<?php echo site_url(); ?>/#about-us" class="nav-list__link js-menu-toggle">
                                About Us
                            </a>
                        </li>
                        <li class="nav-list__item">
                            <a href="<?php echo site_url(); ?>/#contact" class="nav-list__link js-menu-toggle">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="toggler">
                    <div class="toggler__icon js-menu-toggle">
                        <span class="toggler__line"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>