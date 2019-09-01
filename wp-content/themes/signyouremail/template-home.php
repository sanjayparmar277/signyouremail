<?php
/**
 * Template Name: Homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package signyouremail
 */
?>
<?php  echo get_header(); ?>
<section id="features" class="section features">
            <div class="container">
                <h2 class="title is-size-3-mobile is-size-2-tablet is-centered mxw-600">Everything you need for an amazing HTML Email Signature.</h2>
                <div class="columns">
                    <div class="column is-6">
                        <img class="feature-image" src="<?php echo get_template_directory_uri(); ?>/images/home-signature-generator.png"  alt="HTML email signature creator/generator">
                    </div>
                    <div class="column is-6">
                        <h3 class="title is-size-4-mobile is-size-3-tablet">Email Signature in 60 seconds</h3>
                        <p class="subtitle is-size-6-mobile is-size-5-tablet">Create your Email Signature in less then 60 seconds by using our simple &amp; easy to use generator. Just fill in your details and get your HTML email signature instantly with clickable links.</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-6">
                        <img class="feature-image" src="<?php echo get_template_directory_uri(); ?>/images/home-signature-manager.png" alt="HTML email signature Manager dashboard">
                    </div>
                    <div class="column is-6">
                        <h3 class="title is-size-4-mobile is-size-3-tablet">All your signatures in one place</h3>
                        <p class="subtitle is-size-6-mobile is-size-5-tablet">Manage all your email signatures from one single dashboard. Easily create, make changes or remove signatures for your entire team.</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-6">
                        <img class="feature-image" src="<?php echo get_template_directory_uri(); ?>/images/home-signature-social-addons.png" alt="Email signature with social media icons & disclaimer">
                    </div>
                    <div class="column is-6">
                        <h3 class="title is-size-4-mobile is-size-3-tablet">Social Media Links &amp; Addons</h3>
                        <p class="subtitle is-size-6-mobile is-size-5-tablet">Dozens of signature add-ons available for all your professional needs including Social Media icons, Disclaimer, Banner, Mobile apps, Meeting Scheduler.</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-6">
                        <img class="feature-image" src="<?php echo get_template_directory_uri(); ?>/images/home-signature-templates.png" alt="HTML email signature templates">
                    </div>
                    <div class="column is-6">
                        <h3 class="title is-size-4-mobile is-size-3-tablet">Multiple Design Templates</h3>
                        <p class="subtitle is-size-6-mobile is-size-5-tablet">Choose from multiple design template options tested on all major email clients including outlook &amp; mobile devices.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section examples">
            <h2 class="title is-size-3-mobile is-size-2-tablet is-centered mxw-600">SignMyEmails is used and loved by all types of professionals.</h2>
            <div class="columns is-mobile is-multiline">
                <div class="column example is-half-mobile is-half-tablet is-3-desktop"><img src="<?php echo get_template_directory_uri(); ?>/images/html-email-signature-1.png" alt="HTML Email Signature template 01"></div>
                <div class="column example is-half-mobile is-half-tablet is-3-desktop"><img src="<?php echo get_template_directory_uri(); ?>/images/html-email-signature-2.png" alt="HTML Email Signature template 02"></div>
                <div class="column example is-half-mobile is-half-tablet is-3-desktop"><img src="<?php echo get_template_directory_uri(); ?>/images/html-email-signature-3.png" alt="HTML Email Signature template 03"></div>
                <div class="column example is-half-mobile is-half-tablet is-3-desktop"><img src="<?php echo get_template_directory_uri(); ?>/images/html-email-signature-4.png" alt="HTML Email Signature template 04"></div>
                <div class="column example is-half-mobile is-half-tablet is-3-desktop"><img src="<?php echo get_template_directory_uri(); ?>/images/html-email-signature-5.png" alt="HTML Email Signature template 05"></div>
                <div class="column example is-half-mobile is-half-tablet is-3-desktop"><img src="<?php echo get_template_directory_uri(); ?>/images/html-email-signature-6.png" alt="HTML Email Signature template 06"></div>
                <div class="column example is-half-mobile is-half-tablet is-3-desktop"><img src="<?php echo get_template_directory_uri(); ?>/images/html-email-signature-7.png" alt="HTML Email Signature template 07"></div>
                <div class="column example is-half-mobile is-half-tablet is-3-desktop"><img src="<?php echo get_template_directory_uri(); ?>/images/html-email-signature-8.png" alt="HTML Email Signature template 08"></div>
            </div>
        </section>
        <section class="section has-text-centered">
            <h2 class="title is-size-3-mobile is-size-2-tablet is-centered">Create Your Free Signature Today!</h2>
            <p class="subtitle is-4">It only takes 60 seconds to create.</p>
            <a href="<?php echo home_url('create-signature'); ?>" class="button is-success is-medium is-uppercase has-extra-padding">Try Now - It's Free</a>
            <p class="help">*No Signup Required</p>
        </section>
<?php  echo get_footer(); ?>