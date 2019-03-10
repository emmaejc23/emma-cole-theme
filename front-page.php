<?php

/**
 * The template for displaying a custom front page.
 *
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>


<section class="hero-header">
    <div class="container">
        <h1 class="hero-heading ml6">
            Hello<span class="yellow">,</span> i'm Emma Cole
        </h1>
        <p class="heading-intro">
            A Web Designer, Front End Developer and WordPress Specialist based in Atherstone, Warwickshire.
        </p>
        <p class="heading-intro-plus">I specialise in creating custom web solutions for individuals and small businesses.</p>
    </div>
</section>


<section class="services">
    <div class="container">
        <h2 class="text-center">How Can I Help You?</h2>
        <p class="heading-intro-main">I offer a range of services to help you to connect with your customers online, whether you're just starting out or are an established business.</p>

        <div class="row mbr-justify-content-center">
        
            <div class="col-lg-4 mbr-col-md-10">
                <div class="wrap">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa-desktop fa"></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Web <span>Design</span></h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mbr-col-md-10">
                <div class="wrap">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa-code fa"></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Web
                            <span>Development</span>
                        </h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mbr-col-md-10">
                <div class="wrap">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa-palette fa"></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Graphic <span>Design</span></h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum</p>
                    </div>
                </div>
            </div>
        
        
        
        
        </div>
    </div>
</section>







<?php get_footer(); ?>