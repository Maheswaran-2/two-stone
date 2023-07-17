<?php
/**
 * Template Name: Front Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Two_Stones
 */
get_header();
?>

<main class="ptf-main">
    <article class="ptf-page ptf-page--home-agency">
        <section class="ptf-showcase-3 swiper-container swiper-container-initialized swiper-container-horizontal"
            style="cursor: grab;">
            <div class="swiper-wrapper">
                <div class="swiper-slide swiper-slide-active" style="width: 1356px;">
                    <div class="ptf-showcase-image parallax-bg" data-swiper-parallax="30%"
                        style="background-image: url(&quot;https://twostones.co/wp-content/themes/two-stones/assets/img/home/slider/1.jpg&quot;); background-color: rgb(0, 0, 0); opacity: 1; transform: translate3d(0%, 0px, 0px);">
                    </div>
                    <div class="ptf-showcase-slide" style="height: 713.891px;">
                        <div class="container">
                            <div class="fz-120 fz-90--lg lh-1 has-white-color text-center hero-section-h1">
                                <div class="seo-flex justify-content-center">
                                    <h1 class="has-accent-1 hl1 fz-120 fz-90--lg lh-1 has-white-color">Bigger<span
                                            class=" has-white-color">, </span></h1>
                                    <h1 class="hl2 fz-120 fz-90--lg lh-1 has-white-color"> Bolder</h1>
                                </div>
                                <h1 class="hl3 fz-120 fz-90--lg lh-1 has-white-color">&amp; Better</h1>
                            </div>
                            <!--Spacer-->
                            <div class="ptf-spacer" style=" --ptf-xxl: 1.125rem;"></div>
                            <p class="fz-24 has-white-color text-center" style="max-width: 44.375rem; margin: 0 auto;">
                                Like any great agency, we are only as good as the result we deliver of our recent work.
                            </p>
                            <!--Spacer-->
                            <div class="ptf-spacer" style=" --ptf-xxl: 3.625rem;"></div>
                            <div class="d-flex justify-content-center">
                                <!--Button--><a class="ptf-btn ptf-btn--primary" href="https://twostones.co/contact/"
                                    target="_self">Get Started</a>
                                <!--Button--><a class="ptf-btn ptf-btn--secondary" href="https://twostones.co/services/"
                                    target="_self" style="margin-left: 2rem;">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </section>

    </article>
</main>

<?php
get_footer();
?>