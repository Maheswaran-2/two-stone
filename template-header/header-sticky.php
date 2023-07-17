<?php
/**
 * Template part for displaying header content in header.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Two_stone
 */

?>
<header class="ptf-header ptf-header--style-1">
    <div class="ptf-navbar ptf-navbar--main ptf-navbar--transparent ptf-navbar--sticky ptf-navbar--white-text-on-top">
        <div class="container-xxl">
            <div class="ptf-navbar-inner">
                <!--Logo--><a class="ptf-navbar-logo" href="<?php echo esc_url( home_url() ); ?>">
                    <img class="black" src="<?php echo get_theme_mod('ts_header_logo_settings'); ?>" alt=""
                        loading="lazy" />
                    <img class="white" ; src="<?php echo get_theme_mod('ts_stickyheader_logo_settings') ?>" alt=""
                        loading="lazy" />
                </a>
                <!--Navigation-->
                <nav class="ptf-nav ptf-nav--default">
                    <!--Menu-->
                    <ul class="sf-menu">
                        <li class="menu-item">
                            <a href="https://twostones.co"><span class="active">Home</span></a>
                        </li>
                        <li class="menu-item">
                            <a href="services"><span>SERVICES</span></a>
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
                <!--Buttons-->
                <!--Navbar Search-->
                <!-- <div class="ptf-navbar-search">
								<div class="ptf-navbar-search__wrapper">
									<form>
										<input type="text" placeholder="Type and hit enter to search...">
									</form>
								</div><a class="ptf-navbar-search__toggle" href="#"><i class="lnir lnir-search-alt"></i><i class="lnir lnir-close"></i></a>
							</div> -->
                <!--Offcanvas Menu Toggle--><a class="ptf-offcanvas-menu-icon js-offcanvas-menu-toggle" href="#"><i
                        class="lnir lnir-menu-alt-5"></i></a>
            </div>
        </div>
    </div>
</header>