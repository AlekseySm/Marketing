<?php

/**
 * The template for displaying the footer
 */

?>
<footer class="footer">
    <div class="conteiner">
        <div class="footer__main">
            <div class="footer__wrapper">
                <a href="<?php
                    if (get_locale() == 'ar') {
                        echo site_url("/ar/حلول-رقمية-فعالة");
                    } else {
                        echo site_url();
                    }                     
                     ?>" class="footer__logo">
                    <!-- <?php the_field('logo_first', 'options'); ?> <?php the_field('logo_second', 'options'); ?>
                    <span><?php the_field('logo_third', 'options'); ?></span> -->
                    <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 117.3 59.3" style="enable-background:new 0 0 117.3 59.3;" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                opacity: 0.43;
                            }

                            .st1 {
                                fill: none;
                                stroke: #FBC715;
                                stroke-width: 6;
                                stroke-linecap: round;
                            }

                            .st2 {
                                enable-background: new;
                            }
                        </style>
                        <g id="Лого_Десктоп_Хедер" transform="translate(-354.167 -32.018)">
                            <g id="Group_269" transform="translate(362.023 40)" class="st0">
                                <g id="Group_267" transform="translate(-0.936 4.87)">
                                    <path id="Path_264" class="st1" d="M32-1.1L18.2,37.1" />
                                    <path id="Path_265" class="st1" d="M21-1.4L6.3,36.4" />
                                </g>
                                <g id="Group_268" transform="translate(-1.58 -2.091)">
                                    <path id="Path_267" class="st1" d="M40.5,29.1L0.1,28.5" />
                                    <path id="Path_266" class="st1" d="M39.7,18.5l-40.2,0.1" />
                                </g>
                            </g>
                            <g id="Group_266" transform="translate(375.073 33.998)">
                                <g class="st2">
                                    <path d="M9.5,7.8c1.1-1,2.5-1.5,4.3-1.5c1.8,0,3.2,0.5,4.3,1.5c1.1,1,1.6,2.3,1.6,4s-0.5,3-1.6,4c-1.1,1-2.5,1.5-4.3,1.5
				c-1.8,0-3.2-0.5-4.3-1.5c-1.1-1-1.6-2.3-1.6-4S8.5,8.7,9.5,7.8z M11.3,15.3c0.6,0.9,1.5,1.3,2.5,1.3c1.1,0,1.9-0.4,2.5-1.3
				c0.6-0.9,0.9-2,0.9-3.5S17,9.1,16.4,8.2s-1.5-1.3-2.5-1.3c-1.1,0-1.9,0.4-2.5,1.3s-0.9,2-0.9,3.5S10.7,14.4,11.3,15.3z" />
                                    <path d="M20.7,8h4.6c0.4,0,0.8,0,1.2,0.1s0.7,0.2,1,0.4c0.3,0.2,0.6,0.4,0.8,0.8c0.2,0.3,0.3,0.7,0.3,1.2c0,0.6-0.2,1.1-0.5,1.6
				c-0.3,0.5-0.9,0.7-1.6,0.8c0.3,0.1,0.5,0.3,0.8,0.5c0.3,0.3,0.5,0.5,0.6,0.8c0.3,0.6,0.7,1.1,1.1,1.7c0.3,0.4,0.5,0.7,0.8,0.8
				c0.2,0.1,0.5,0.2,0.8,0.2V17h-1.3c-0.8,0-1.5-0.1-1.9-0.3s-0.8-0.6-1.2-1.1c-0.5-0.9-0.9-1.5-1-2c-0.1-0.3-0.3-0.5-0.4-0.7
				c-0.2-0.1-0.3-0.2-0.5-0.3v-0.1h0.4c0.9,0,1.4-0.5,1.6-1.5c0-0.2,0.1-0.4,0.1-0.6c0-0.3-0.1-0.6-0.2-0.9C26,9.2,25.9,9,25.7,8.9
				c-0.2-0.1-0.3-0.2-0.5-0.2c-0.1,0-0.3-0.1-0.5-0.1c-0.1,0-0.3,0-0.5,0s-0.3,0-0.4,0v7.4c0,0.2,0.1,0.4,0.2,0.6
				c0.2,0.1,0.4,0.2,0.6,0.2h0.2V17h-4.1v-0.2h0.2c0.2,0,0.4-0.1,0.6-0.2c0.2-0.2,0.2-0.3,0.2-0.6V8.9c0-0.2-0.1-0.4-0.2-0.6
				c-0.2-0.2-0.3-0.2-0.5-0.2h-0.2V8z" />
                                    <path d="M39.7,13.4v2c-0.4,0.4-0.9,0.9-1.8,1.2c-0.8,0.4-1.7,0.5-2.7,0.5c-1.5,0-2.7-0.4-3.6-1.3c-0.9-0.8-1.3-2-1.3-3.4
				s0.4-2.6,1.3-3.4c0.9-0.8,2.1-1.2,3.7-1.2c0.7,0,1.4,0.1,2.1,0.2C38,8.1,38.6,8.3,39,8.5v2.4h-0.1c-0.4-1.6-1.5-2.5-3.1-2.5
				c-1,0-1.8,0.4-2.4,1.1c-0.5,0.7-0.8,1.8-0.8,3.1c0,1.3,0.2,2.2,0.7,3c0.5,0.7,1.2,1.1,2.1,1.1c0.5,0,1-0.1,1.4-0.4
				c0.4-0.2,0.7-0.6,0.8-1l0-1.8c0-0.2-0.1-0.3-0.2-0.4c-0.1-0.1-0.3-0.2-0.5-0.2h-0.2v-0.1h3.9v0.1h-0.2
				C39.9,12.8,39.7,13,39.7,13.4z" />
                                    <path d="M45.5,7.6l4,8.4c0.1,0.3,0.3,0.5,0.5,0.6s0.4,0.2,0.7,0.2h0.1V17h-4.4v-0.2h0.1c0.2,0,0.4-0.1,0.5-0.2
				c0.1-0.2,0.1-0.4,0-0.6l-0.6-1.4h-3.2L42.6,16c-0.1,0.2-0.1,0.4,0,0.6s0.3,0.2,0.5,0.2h0.1V17h-3v-0.2h0.1c0.2,0,0.4-0.1,0.6-0.2
				s0.4-0.3,0.5-0.6l3.1-6.7c0.4-1,0.7-1.6,0.7-1.8H45.5z M43.5,14.1h2.7l-1.3-3.1L43.5,14.1z" />
                                    <path d="M57.5,8h4.2v0.2h-0.3c-0.2,0-0.4,0.1-0.6,0.2c-0.2,0.1-0.2,0.3-0.2,0.5v6.6c0,0.3,0,0.6,0,0.9c0,0.3,0.1,0.5,0.1,0.6
				l0,0.2h-0.1l-6.9-6.1v5c0,0.2,0.1,0.4,0.2,0.5c0.2,0.1,0.3,0.2,0.6,0.2h0.3V17h-4.2v-0.2h0.2c0.2,0,0.4-0.1,0.6-0.2
				c0.2-0.1,0.2-0.3,0.2-0.5V9.5c0-0.3,0-0.6,0-0.9c0-0.3-0.1-0.5-0.1-0.6l0-0.2l0.1,0l6.9,6V8.9c0-0.2-0.1-0.4-0.2-0.5
				c-0.2-0.1-0.3-0.2-0.6-0.2h-0.3V8z" />
                                    <path d="M66.8,17h-4.3v-0.2h0.2c0.2,0,0.4-0.1,0.6-0.2c0.2-0.2,0.3-0.3,0.3-0.6V8.9c0-0.2-0.1-0.4-0.3-0.6s-0.4-0.2-0.6-0.2h-0.2
				V8h4.3v0.2h-0.2c-0.2,0-0.4,0.1-0.6,0.2c-0.2,0.2-0.3,0.3-0.3,0.6v7.1c0,0.2,0.1,0.4,0.3,0.6c0.2,0.2,0.4,0.2,0.6,0.2h0.2V17z" />
                                    <path d="M76,14.2h0.1L75.5,17h-7.7v-0.1l4.9-8.3h-3.2c-0.4,0-0.8,0.1-1,0.4c-0.2,0.3-0.4,0.6-0.4,1v0.1H68V7.8
				c0.1,0.1,0.4,0.1,0.7,0.2S69.4,8,69.7,8h4.4c0.3,0,0.6,0,0.9-0.1c0.3,0,0.5-0.1,0.6-0.1v0.1l-4.9,8.5h2.6
				C74.7,16.4,75.6,15.7,76,14.2z" />
                                    <path d="M84.7,14.2L84.1,17h0h-7v-0.2h0.2c0.2,0,0.4-0.1,0.6-0.2s0.2-0.3,0.2-0.6V8.9c0-0.2-0.1-0.4-0.2-0.6s-0.3-0.2-0.6-0.2
				h-0.2V8h5.3c0.3,0,0.6,0,0.9-0.1c0.3,0,0.5-0.1,0.7-0.1v2.4h-0.2V10c0-0.4-0.1-0.8-0.4-1c-0.2-0.3-0.6-0.4-1-0.4h-2.2v3.6h1.7
				c0.3,0,0.6-0.1,0.8-0.3c0.2-0.2,0.3-0.5,0.3-0.8V11h0.1v3.2h-0.1V14c0-0.3-0.1-0.6-0.3-0.8c-0.2-0.2-0.5-0.3-0.8-0.3h-1.7v3.6H82
				c0.6,0,1.1-0.2,1.6-0.6c0.4-0.4,0.8-0.9,1-1.6H84.7z" />
                                    <path d="M85.6,8h4.6c0.4,0,0.8,0,1.2,0.1s0.7,0.2,1,0.4C92.7,8.7,93,9,93.2,9.3c0.2,0.3,0.3,0.7,0.3,1.2c0,0.6-0.2,1.1-0.5,1.6
				c-0.4,0.5-0.9,0.7-1.6,0.8c0.3,0.1,0.5,0.3,0.8,0.5s0.5,0.5,0.6,0.8c0.3,0.6,0.7,1.1,1.1,1.7c0.3,0.4,0.5,0.7,0.8,0.8
				c0.2,0.1,0.5,0.2,0.8,0.2V17h-1.3c-0.8,0-1.5-0.1-1.9-0.3c-0.4-0.2-0.8-0.6-1.2-1.1c-0.5-0.9-0.9-1.5-1-2
				c-0.1-0.3-0.3-0.5-0.4-0.7c-0.2-0.1-0.3-0.2-0.5-0.3v-0.1h0.4c0.8,0,1.4-0.5,1.6-1.5c0-0.2,0.1-0.4,0.1-0.6
				c0-0.3-0.1-0.6-0.2-0.9S90.7,9,90.5,8.9c-0.2-0.1-0.3-0.2-0.5-0.2c-0.1,0-0.3-0.1-0.5-0.1c-0.1,0-0.3,0-0.5,0c-0.2,0-0.3,0-0.4,0
				v7.4c0,0.2,0.1,0.4,0.2,0.6c0.2,0.1,0.4,0.2,0.6,0.2h0.2V17h-4.1v-0.2h0.2c0.2,0,0.4-0.1,0.6-0.2s0.2-0.3,0.2-0.6V8.9
				c0-0.2-0.1-0.4-0.2-0.6S86,8.2,85.7,8.2h-0.2V8z" />
                                </g>
                                <g class="st2">
                                    <path d="M18.2,26.3l1.3,9.6c0.1,0.3,0.2,0.5,0.4,0.7c0.2,0.2,0.4,0.3,0.7,0.3h0.2V37h-4.5v-0.1h0.2c0.2,0,0.3-0.1,0.4-0.2
				c0.1-0.1,0.2-0.3,0.1-0.4l-0.6-5.4l-2.8,4.9c-0.4,0.6-0.6,1.2-0.6,1.7H13l-3.9-6.5l-0.6,5.4c0,0.2,0,0.3,0.1,0.4
				c0.1,0.1,0.3,0.2,0.4,0.2h0.2V37H6.2v-0.2h0.2c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.4-0.7l1.2-9.6h0.1l4.6,7.6l4.5-7.6H18.2z
				" />
                                    <path d="M25.4,27.6l4,8.4c0.1,0.3,0.3,0.5,0.5,0.6s0.4,0.2,0.7,0.2h0.1V37h-4.4v-0.2h0.1c0.2,0,0.4-0.1,0.5-0.2
				c0.1-0.2,0.1-0.4,0-0.6l-0.6-1.4h-3.2L22.6,36c-0.1,0.2-0.1,0.4,0,0.6c0.1,0.2,0.3,0.2,0.5,0.2h0.1V37h-3v-0.2h0.1
				c0.2,0,0.4-0.1,0.6-0.2c0.2-0.1,0.4-0.3,0.5-0.6l3.1-6.7c0.4-1,0.7-1.6,0.7-1.8H25.4z M23.5,34.1h2.7l-1.3-3.1L23.5,34.1z" />
                                    <path d="M30.9,28h4.6c0.4,0,0.8,0,1.2,0.1s0.7,0.2,1,0.4c0.3,0.2,0.6,0.4,0.8,0.8c0.2,0.3,0.3,0.7,0.3,1.2c0,0.6-0.2,1.1-0.5,1.6
				s-0.9,0.7-1.6,0.8c0.3,0.1,0.5,0.3,0.8,0.5c0.3,0.3,0.5,0.5,0.6,0.8c0.3,0.6,0.7,1.1,1.1,1.7c0.3,0.4,0.5,0.7,0.8,0.8
				c0.2,0.1,0.5,0.2,0.8,0.2V37h-1.3c-0.8,0-1.5-0.1-1.9-0.3c-0.4-0.2-0.8-0.6-1.2-1.1c-0.5-0.9-0.9-1.5-1-2
				c-0.1-0.3-0.3-0.5-0.4-0.7c-0.2-0.1-0.3-0.2-0.5-0.3v-0.1h0.4c0.9,0,1.4-0.5,1.6-1.5c0-0.2,0.1-0.4,0.1-0.6
				c0-0.3-0.1-0.6-0.2-0.9c-0.1-0.2-0.3-0.4-0.4-0.5c-0.2-0.1-0.3-0.2-0.5-0.2s-0.3-0.1-0.5-0.1c-0.1,0-0.3,0-0.5,0
				c-0.2,0-0.3,0-0.4,0v7.4c0,0.2,0.1,0.4,0.2,0.6c0.2,0.1,0.4,0.2,0.6,0.2H35V37h-4.1v-0.2h0.2c0.2,0,0.4-0.1,0.6-0.2
				c0.2-0.2,0.2-0.3,0.2-0.6v-7.1c0-0.2-0.1-0.4-0.2-0.6c-0.2-0.2-0.3-0.2-0.5-0.2h-0.2V28z" />
                                    <path d="M44.8,36.9l0,0.2h-4.1v-0.2h0.1c0.2,0,0.4-0.1,0.6-0.2s0.2-0.3,0.3-0.6v-7.1c0-0.2-0.1-0.4-0.3-0.6s-0.4-0.2-0.6-0.2
				h-0.2V28h4.2v0.2h-0.2c-0.2,0-0.4,0.1-0.6,0.2s-0.3,0.3-0.3,0.6v7.1c0,0.2,0.1,0.4,0.3,0.6s0.4,0.2,0.6,0.2H44.8z M46.1,31.6
				l3.2,4.4c0.4,0.6,0.8,0.9,1.3,0.9V37h-1.2c-1.4,0-2.4-0.4-3-1.2c0-0.1-0.3-0.4-0.7-0.9c-0.4-0.5-0.9-1.2-1.5-2.1l3.1-4.1
				c0.1-0.1,0.1-0.3,0.1-0.4s-0.2-0.2-0.4-0.2h-0.1V28H50v0.1h-0.1c-0.5,0-1,0.2-1.4,0.5L46.1,31.6z" />
                                    <path d="M58.4,34.2L57.8,37h0h-7v-0.2h0.2c0.2,0,0.4-0.1,0.6-0.2c0.2-0.2,0.2-0.3,0.2-0.6v-7.1c0-0.2-0.1-0.4-0.2-0.6
				c-0.2-0.2-0.3-0.2-0.6-0.2h-0.2V28H56c0.3,0,0.6,0,0.9-0.1c0.3,0,0.5-0.1,0.7-0.1v2.4h-0.2V30c0-0.4-0.1-0.8-0.4-1
				c-0.2-0.3-0.6-0.4-1-0.4h-2.2v3.6h1.7c0.3,0,0.6-0.1,0.8-0.3c0.2-0.2,0.3-0.5,0.3-0.8V31h0.1v3.2h-0.1V34c0-0.3-0.1-0.6-0.3-0.8
				s-0.5-0.3-0.8-0.3h-1.7v3.6h1.8c0.6,0,1.1-0.2,1.6-0.6c0.4-0.4,0.8-0.9,1-1.6H58.4z" />
                                    <path d="M67.6,27.8v2.4h-0.2V30c0-0.4-0.1-0.8-0.4-1c-0.2-0.2-0.6-0.4-1-0.4h-1.7v7.5c0,0.2,0.1,0.4,0.3,0.6
				c0.2,0.2,0.3,0.2,0.6,0.2h0.2V37h-4.1v-0.2h0.1c0.2,0,0.4-0.1,0.6-0.2c0.2-0.2,0.2-0.3,0.2-0.6v-7.5h-1.7c-0.4,0-0.8,0.1-1,0.4
				c-0.2,0.3-0.4,0.6-0.4,1v0.1h-0.2v-2.4c0.1,0.1,0.4,0.1,0.7,0.2c0.3,0,0.6,0.1,0.9,0.1H66c0.3,0,0.6,0,0.9-0.1
				S67.5,27.8,67.6,27.8z" />
                                    <path d="M72.6,37h-4.3v-0.2h0.2c0.2,0,0.4-0.1,0.6-0.2s0.3-0.3,0.3-0.6v-7.1c0-0.2-0.1-0.4-0.3-0.6s-0.4-0.2-0.6-0.2h-0.2V28h4.3
				v0.2h-0.2c-0.2,0-0.4,0.1-0.6,0.2c-0.2,0.2-0.3,0.3-0.3,0.6v7.1c0,0.2,0.1,0.4,0.3,0.6c0.2,0.2,0.4,0.2,0.6,0.2h0.2V37z" />
                                    <path d="M80.3,28h4.2v0.2h-0.3c-0.2,0-0.4,0.1-0.6,0.2c-0.2,0.1-0.2,0.3-0.2,0.5v6.6c0,0.3,0,0.6,0,0.9c0,0.3,0.1,0.5,0.1,0.6
				l0,0.2h-0.1l-6.9-6.1v5c0,0.2,0.1,0.4,0.2,0.5c0.2,0.1,0.3,0.2,0.6,0.2h0.3V37h-4.2v-0.2h0.2c0.2,0,0.4-0.1,0.6-0.2
				c0.2-0.1,0.2-0.3,0.2-0.5v-6.6c0-0.3,0-0.6,0-0.9c0-0.3-0.1-0.5-0.1-0.6l0-0.2l0.1,0l6.9,6v-4.9c0-0.2-0.1-0.4-0.2-0.5
				c-0.2-0.1-0.3-0.2-0.6-0.2h-0.3V28z" />
                                    <path d="M94.7,33.4v2c-0.4,0.4-0.9,0.9-1.8,1.2s-1.7,0.5-2.7,0.5c-1.5,0-2.7-0.4-3.6-1.3c-0.9-0.8-1.3-2-1.3-3.4
				c0-1.5,0.4-2.6,1.3-3.4c0.9-0.8,2.1-1.2,3.7-1.2c0.7,0,1.4,0.1,2.1,0.2c0.7,0.1,1.2,0.3,1.6,0.5v2.4h-0.1
				c-0.4-1.6-1.5-2.5-3.2-2.5c-1,0-1.8,0.4-2.4,1.1c-0.5,0.7-0.8,1.8-0.8,3.1c0,1.3,0.2,2.2,0.7,3c0.5,0.7,1.2,1.1,2.1,1.1
				c0.5,0,1-0.1,1.4-0.4c0.4-0.2,0.7-0.6,0.8-1l0-1.8c0-0.2-0.1-0.3-0.2-0.4c-0.1-0.1-0.3-0.2-0.5-0.2h-0.2v-0.1h3.9v0.1h-0.2
				C94.9,32.8,94.7,33,94.7,33.4z" />
                                </g>
                                <g class="st2">
                                    <path d="M28,46l3.6,7.8c0.1,0.2,0.3,0.4,0.5,0.5c0.2,0.1,0.4,0.2,0.6,0.2h0.1v0.1h-3.8v-0.1H29c0.2,0,0.3-0.1,0.4-0.2
				c0.1-0.1,0.1-0.3,0-0.5l-0.6-1.5H26l-0.6,1.5c-0.1,0.2-0.1,0.4,0,0.5c0.1,0.1,0.3,0.2,0.4,0.2H26v0.1h-2.6v-0.1h0.1
				c0.2,0,0.4-0.1,0.6-0.2c0.2-0.1,0.3-0.3,0.5-0.5l2.8-6.3c0.4-0.8,0.6-1.3,0.6-1.6H28z M26.2,51.8h2.4l-1.2-3L26.2,51.8z" />
                                    <path d="M40.1,51.8v1.6c-0.3,0.4-0.8,0.7-1.4,1s-1.4,0.4-2.2,0.4c-1.2,0-2.2-0.3-2.9-1c-0.7-0.7-1.1-1.6-1.1-2.8s0.4-2.1,1.1-2.7
				s1.7-1,3-1c0.6,0,1.1,0.1,1.7,0.2c0.5,0.1,1,0.2,1.3,0.4v1.9h-0.1c-0.4-1.3-1.2-2-2.5-2c-0.8,0-1.5,0.3-1.9,0.9
				c-0.4,0.6-0.7,1.4-0.7,2.5c0,1,0.2,1.8,0.6,2.4c0.4,0.6,1,0.9,1.7,0.9c0.4,0,0.8-0.1,1.1-0.3c0.3-0.2,0.5-0.5,0.6-0.8l0-1.4
				c0-0.2,0-0.3-0.1-0.4c-0.1-0.1-0.2-0.1-0.4-0.1h-0.2v-0.1h3.1v0.1h-0.1C40.2,51.3,40.1,51.5,40.1,51.8z" />
                                    <path d="M47.2,52.4l-0.5,2.2h0H41v-0.1h0.1c0.2,0,0.3-0.1,0.5-0.2c0.1-0.1,0.2-0.3,0.2-0.4v-5.7c0-0.2-0.1-0.3-0.2-0.4
				c-0.1-0.1-0.3-0.2-0.5-0.2H41v-0.1h4.2c0.2,0,0.5,0,0.7-0.1s0.4-0.1,0.5-0.1v1.9h-0.1v-0.1c0-0.4-0.1-0.6-0.3-0.8
				c-0.2-0.2-0.5-0.3-0.8-0.3h-1.7v2.9h1.4c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7v-0.1H46v2.5h-0.1v-0.1
				c0-0.3-0.1-0.5-0.2-0.7c-0.2-0.2-0.4-0.3-0.7-0.3h-1.4v2.8H45c0.5,0,0.9-0.2,1.3-0.5c0.3-0.3,0.6-0.7,0.8-1.3H47.2z" />
                                    <path d="M53.1,47.4h3.4v0.1h-0.2c-0.2,0-0.3,0.1-0.5,0.2s-0.2,0.3-0.2,0.4v5.2c0,0.2,0,0.5,0,0.7c0,0.2,0,0.4,0.1,0.5l0,0.2h-0.1
				l-5.5-4.9v4c0,0.2,0.1,0.3,0.2,0.4s0.3,0.2,0.5,0.2H51v0.1h-3.4v-0.1h0.2c0.2,0,0.3-0.1,0.5-0.2s0.2-0.3,0.2-0.4v-5.3
				c0-0.2,0-0.5,0-0.7c0-0.2,0-0.4-0.1-0.5l0-0.2l0.1,0l5.5,4.8v-3.9c0-0.2-0.1-0.3-0.2-0.4c-0.1-0.1-0.3-0.2-0.5-0.2h-0.2V47.4z" />
                                    <path d="M64.2,51.6L64.2,51.6l0.2,1.8c-0.2,0.4-0.6,0.7-1.1,1c-0.5,0.2-1.1,0.4-1.9,0.4c-1.3,0-2.4-0.3-3.2-1
				c-0.8-0.7-1.2-1.6-1.2-2.8c0-1.2,0.4-2.1,1.1-2.8c0.8-0.7,1.8-1,3.2-1c1.1,0,2,0.2,2.7,0.6v1.9H64c-0.2-0.7-0.5-1.2-0.9-1.5
				s-0.9-0.5-1.6-0.5c-0.8,0-1.5,0.3-1.9,0.9S58.9,50,58.9,51c0,1,0.2,1.8,0.7,2.4c0.4,0.6,1.1,0.9,1.8,0.9c0.9,0,1.5-0.2,1.9-0.6
				C63.7,53.3,64,52.6,64.2,51.6z" />
                                    <path d="M70.4,47.4H73v0.1h-0.2c-0.2,0-0.4,0.1-0.6,0.2c-0.2,0.1-0.3,0.3-0.5,0.4l-2.1,3.3v2.4c0,0.2,0.1,0.3,0.2,0.5
				s0.3,0.2,0.5,0.2h0.1v0.1h-3.4v-0.1h0.1c0.2,0,0.3-0.1,0.5-0.2s0.2-0.3,0.2-0.5v-2.4l-2.1-3.3c-0.1-0.2-0.3-0.3-0.5-0.4
				s-0.4-0.2-0.6-0.2h-0.1v-0.1h3.6v0.1h-0.1c-0.2,0-0.3,0.1-0.4,0.2s-0.1,0.3,0,0.4l1.6,2.8l1.6-2.8c0.1-0.1,0.1-0.3,0-0.4
				c-0.1-0.1-0.2-0.2-0.4-0.2h-0.1V47.4z" />
                                </g>
                            </g>
                        </g>
                    </svg>
                </a>
                <ul class="footer__contacts">
                    <li><a href="tel:<?php the_field('phone', 'options'); ?>"><?php pll_e('Phone'); ?>: <?php the_field('phone', 'options'); ?></a></li>
                    <li><a href="mailto:<?php the_field('email', 'options'); ?>"><?php pll_e('E-mail'); ?>: <?php the_field('email', 'options'); ?></a></li>
                    <li><a href="#" target="_blank" rel="noopener noreferrer"><?php the_field('adress', 'options'); ?></a></li>
                </ul>
            </div>
            <div class="footer__wrapper footer__wrapper--col">
                <ul class="footer__nav">
                    <li><a href="<?php
                    if (get_locale() == 'ar') {
                        echo site_url("/ar/حلول-رقمية-فعالة");
                    } else {
                        echo site_url();
                    }                     
                     ?>/#services"><?php pll_e('Services'); ?></a></li>
                    <li><a href="<?php
                    if (get_locale() == 'ar') {
                        echo site_url("/ar/حلول-رقمية-فعالة");
                    } else {
                        echo site_url();
                    }                     
                     ?>/#about-us"><?php pll_e('About Us'); ?></a></li>
                    <li><a href="<?php
                    if (get_locale() == 'ar') {
                        echo site_url("/ar/privacy-policy-2/");
                    } else {
                        echo site_url("privacy-policy");
                    }                     
                     ?>"><?php pll_e('Privacy Policy'); ?></a></li>
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
        <div class="copyright">© <?php echo date("Y"); ?>        
        <?php pll_e('All rights reserved'); ?>
        </div>
    </div>
</footer>
<a href="#" class="scrollup"></a>
</div>
<!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLKJCtE_7TQp1GpEWXJrAbsz72LVOCRHo;callback=initMap"></script>-->

<?php wp_footer(); ?>
</body>

</html>