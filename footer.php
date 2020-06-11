<?php

/**
 * The template for displaying the footer
 */

?>
<footer class="footer">
    <div class="conteiner">
        <div class="footer__main">
            <div class="footer__wrapper">
                <a href="<?php echo site_url(); ?>" class="footer__logo"><?php the_field('logo_first', 'options'); ?> <?php the_field('logo_second', 'options'); ?>
                    <span><?php the_field('logo_third', 'options'); ?></span></a>
                <ul class="footer__contacts">
                    <li><a href="tel:<?php the_field('phone', 'options'); ?>">Phone: <?php the_field('phone', 'options'); ?></a></li>
                    <li><a href="mailto:<?php the_field('email', 'options'); ?>">E-mail: <?php the_field('email', 'options'); ?></a></li>
                    <li><a href="#" target="_blank" rel="noopener noreferrer"><?php the_field('adress', 'options'); ?></a></li>
                </ul>
            </div>
            <div class="footer__wrapper footer__wrapper--col">
                <ul class="footer__nav">
                    <li><a href="<?php echo site_url(); ?>/#services">Services</a></li>
                    <li><a href="<?php echo site_url(); ?>/#about-us">About Us</a></li>
                </ul>
                <ul class="footer__social">
                    <li>
                        <a href="<?php the_field('instagram', 'options'); ?>" target="_blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22.927" height="22.187" viewBox="0 0 22.927 22.187">
                                <defs>
                                    <style>
                                        .inst_a,
                                        .inst_d {
                                            fill: #fff;
                                        }

                                        .inst_b {
                                            fill: none;
                                        }

                                        .inst_c,
                                        .inst_f {
                                            fill: #727272;
                                        }

                                        .inst_c,
                                        .inst_d {
                                            stroke: #727272;
                                        }

                                        .inst_d {
                                            stroke-width: 1.8px;
                                        }

                                        .inst_e,
                                        .inst_f {
                                            stroke: none;
                                        }
                                    </style>
                                </defs>
                                <path class="inst_a" d="M15.254,0H6.934A6.934,6.934,0,0,0,0,6.933v8.32a6.934,6.934,0,0,0,6.934,6.933h8.32a6.934,6.934,0,0,0,6.934-6.933V6.933A6.934,6.934,0,0,0,15.254,0Zm.288,8.024c0,2.676,1.025,7.23-1.651,7.23-7.008,4.853-1.116,3.071-1.116.445l-2.41.268c0-2.676-6.157-2.09-3.481-2.09L6.35,8.47c2.676,0,6.738-4.461,6.738-1.785Z" />
                                <g transform="translate(1.479)">
                                    <rect class="inst_a" width="21.448" height="22.187" rx="9" />
                                    <g class="inst_b" transform="translate(0 1.479)">
                                        <path class="inst_e" d="M6.656,0h6.656a6.656,6.656,0,0,1,6.656,6.656v5.917a6.569,6.569,0,0,1-6.553,6.656H6.656A6.656,6.656,0,0,1,0,12.573V6.656A6.656,6.656,0,0,1,6.656,0Z" />
                                        <path class="inst_f" d="M 6.656167030334473 1.799999237060547 C 3.978466987609863 1.799999237060547 1.799997329711914 3.978460311889648 1.799997329711914 6.656160354614258 L 1.799997329711914 12.57275009155273 C 1.799997329711914 15.25045013427734 3.978466987609863 17.42892074584961 6.656167030334473 17.42892074584961 L 13.41560745239258 17.42892074584961 C 14.69899749755859 17.42892074584961 15.89528656005859 16.9287109375 16.78408813476563 16.02043914794922 C 17.67683792114258 15.10812950134277 18.16849708557129 13.88372039794922 18.16849708557129 12.57275009155273 L 18.16849708557129 6.656160354614258 C 18.16849708557129 3.978460311889648 15.99002742767334 1.799999237060547 13.31232738494873 1.799999237060547 L 6.656167030334473 1.799999237060547 M 6.656167030334473 0 L 13.31232738494873 0 C 16.98842620849609 0 19.96849632263184 2.980070114135742 19.96849632263184 6.656160354614258 L 19.96849632263184 12.57275009155273 C 19.96849632263184 16.24884986877441 17.09170722961426 19.22891998291016 13.41560745239258 19.22891998291016 L 6.656167030334473 19.22891998291016 C 2.980066299438477 19.22891998291016 -1.9073486328125e-06 16.24884986877441 -1.9073486328125e-06 12.57275009155273 L -1.9073486328125e-06 6.656160354614258 C -1.9073486328125e-06 2.980070114135742 2.980066299438477 0 6.656167030334473 0 Z" />
                                    </g>
                                </g>
                                <g transform="translate(6.703 4.392)">
                                    <g transform="translate(8.875)">
                                        <ellipse class="inst_c" cx="0.74" cy="0.74" rx="0.74" ry="0.74" />
                                    </g>
                                    <g transform="translate(0 2.3)">
                                        <ellipse class="inst_d" cx="4.397" cy="4.397" rx="4.397" ry="4.397" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="<?php the_field('facebook', 'options'); ?>" target="_blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="11.094" height="22.187" viewBox="0 0 11.094 22.187">
                                <defs>
                                    <style>
                                        .face_a {
                                            fill: #fff;
                                        }
                                    </style>
                                </defs>
                                <path class="face_a" d="M134.934,7.627V4.853a1.387,1.387,0,0,1,1.387-1.387h1.387V0h-2.773a4.16,4.16,0,0,0-4.16,4.16V7.627H128v3.467h2.773V22.187h4.16V11.094h2.773l1.387-3.467Z" transform="translate(-128)" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="<?php the_field('linkedin', 'options'); ?>" target="_blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22.261" height="22.188" viewBox="0 0 22.261 22.188">
                                <defs>
                                    <style>
                                        .lin_a {
                                            fill: #fff;
                                        }
                                    </style>
                                </defs>
                                <g transform="translate(0.145 6.983)">
                                    <rect class="lin_a" width="4.946" height="15.204" />
                                </g>
                                <g transform="translate(7.056 6.983)">
                                    <path class="lin_a" d="M171.506,160.178c-.053-.017-.1-.035-.158-.05s-.133-.028-.2-.039a4.433,4.433,0,0,0-.887-.09,6.871,6.871,0,0,0-5.315,2.907V160H160v15.2h4.946v-8.293s3.738-5.205,5.315-1.382V175.2H175.2v-10.26A4.931,4.931,0,0,0,171.506,160.178Z" transform="translate(-160 -160)" />
                                </g>
                                <g transform="translate(0 0)">
                                    <circle class="lin_a" cx="2.589" cy="2.589" r="2.589" />
                                </g>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            © 2020 All rights reserved
        </div>
    </div>
</footer>
<a href="#" class="scrollup"></a>
</div>
<!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLKJCtE_7TQp1GpEWXJrAbsz72LVOCRHo;callback=initMap"></script>-->

<?php wp_footer(); ?>
</body>

</html>