<?php
/**
 * The template for displaying the services page.
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

<section class="web-design">
        <div class="container">
            <h1 class="text-center">Web Design</h1>
            <p class="heading-intro-main">
                Good web design can mean the difference between a site that simply looks good and a site that actually converts visitors into customers.
            
                I believe that a website should provide you with a positive return on your investment by either making you money, or saving you money. To achieve this I employ a three stage process:
            </p>
            <div class="row">
                <div class="col-md-3">
                    <p class="design-phase-number">1</p>
                </div>
                <div class="col-md-9 design-phase-info-box">
                    <h3 class="design-phase-title">Goal Identification</h3>
                    <p>Every web design project starts with a business goal. Are you looking to generate more leads?, increase the number of customers visiting your business?, or maybe you're looking to attract a different kind of customer?. I can work with you to help identify your business goal in order to craft an effective solution.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p class="design-phase-number">2</p>
                </div>
                <div class="col-md-9 design-phase-info-box">
                    <h3 class="design-phase-title" >Research</h3>
                    <p>Once we've identified a primary goal for your website, I will conduct extensive research into your target market and competition to discover what works and identify areas that we can improve upon to give your business a competitive edge.                    
                    Whilst this can be a lengthy process, it is a crucial step in creating an effective website.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p class="design-phase-number" >3</p>
                </div>
                <div class="col-md-9 design-phase-info-box">
                    <h3 class="design-phase-title">The Design Phase</h3>
                    <p>The results from the research phase will enable me to design a website that is uniquely tailored to your target market. Every aspect of your site is geared towards achieving your busieness goal, from your web content to the choice of fonts and colours.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p class="design-phase-number">4</p>
                </div>
                <div class="col-md-9 design-phase-info-box">
                    <h3 class="design-phase-title">Development Phase</h3>
                    <p>Once you have approved the design I will begin developing your website. This will usually involve recreating the design with code and, depending on your requirements, integrating a content management system that allows you to easily add and edit your content.                
                    </p>
                    <p>I will spend time going through your website with you and showing you how to publish and change your content prior to going live so you can feel confident that you will be able to manage your site</p>
                </div>
            </div>
        </div>

    </section>

    
    
    <section class="other-services">
        <div class="container">
            <h2 class="text-center mb-4">Other Services</h2>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="our-services-wrapper mb-60">
                            <div class="services-inner">
                                <div class="our-services-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/HTML5_1Color_Black.png" width="68px"  alt="" />                                   
                                </div>
                                <div class="our-services-text">
                                    <h4>Design to Html</h4>
                                    <p>Do you already have a design you'd like to use? I can re-create your vision using Google friendly Html5, Css3 and Javascript to craft a fully responsive website.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="our-services-wrapper mb-60">
                            <div class="services-inner">
                                <div class="our-services-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/WordPress-logotype-simplified.png" width="68px"  alt="" />
                                </div>
                                <div class="our-services-text">
                                    <h4>Design to WordPress</h4>
                                    <p>Turn your design into a WordPress theme that allows you to add and edit content yourself.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="our-services-wrapper mb-60">
                            <div class="services-inner">
                                <div class="our-services-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/WordPress-logotype-simplified.png" width="68px"  alt="" />
                                </div>
                                <div class="our-services-text">
                                    <h4>WordPress Services</h4>
                                    <p>Do you want to make changes to an existing WordPress website? Contact me below with your requirements.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>






<?php get_footer(); ?>