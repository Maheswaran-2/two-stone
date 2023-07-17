<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Two_stone
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="ptf-site-wrapper animsition">
        <div class="ptf-site-wrapper__inner">

            <?php
            if (get_field('header_style') == 'static'):
                get_template_part('template-header/header', 'static');
            elseif (get_field('header_style') == 'sticky'):
                get_template_part('template-header/header', 'sticky');
            endif;
            ?>
            <!--Site Overlay-->
            <div class="ptf-site-overlay"></div>
            <!--Offcanvas Menu-->
            <div class="ptf-offcanvas-menu">
                <div class="ptf-offcanvas-menu__header">
                    <!-- <div class="ptf-language-switcher"><a class="is-active" href="#">Eng</a><a href="#">Fra</a><a href="#">Ger</a></div> -->
                    <a class="ptf-offcanvas-menu-icon js-offcanvas-menu-toggle" href="#"><i
                            class="lnir lnir-close"></i></a>
                </div>
                <div class="ptf-offcanvas-menu__navigation">
                    <!--Navigation-->
                    <nav class="ptf-nav ptf-nav--offcanvas">
                        <!--Menu-->
                        <ul class="sf-menu">
                            <li class="menu-item">
                                <a href="https://twostones.co"><span class="active">Home</span></a>
                            </li>
                            <li class="menu-item">
                                <a href="services"><span>Services</span></a>
                            </li>
                            <li class="menu-item">
                                <a href="work"><span>Work</span></a>
                            </li>
                            <li class="menu-item">
                                <a href="about"><span>About</span></a>
                            </li>
                            <li class="menu-item">
                                <a href="contact"><span>Contact</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="ptf-offcanvas-menu__footer">
                    <p class="ptf-offcanvas-menu__copyright">
                        © 2022 <span>TWO STONES</span>. All Rights Reserved.
                    </p>
                    <div class="ptf-offcanvas-menu__socials">
                        <!--Social Icon--><a class="ptf-social-icon ptf-social-icon--style-3 twitter" href="#"
                            target="_blank"><i class="socicon-twitter"></i></a>
                        <!--Social Icon--><a class="ptf-social-icon ptf-social-icon--style-3 facebook" href="#"
                            target="_blank"><i class="socicon-facebook"></i></a>
                        <!--Social Icon--><a class="ptf-social-icon ptf-social-icon--style-3 instagram" href="#"
                            target="_blank"><i class="socicon-instagram"></i></a>
                    </div>
                </div>
            </div>
            <!--Main-->