<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from www.signmyemails.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 17:12:17 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport"/>
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
    <body <?php body_class(); ?>>
		<div id="main">
		<?php if(is_front_page()){?>
			<div class="hero is-medium is-info is-home">
				<div class="hero-head">
		<?php } ?>
					<header class="header">
						<div class="container">
							<nav class="navbar is-transparent">
								<div class="navbar-brand">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-item">
										<img class="logo" width="175" min-height="60" src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="SignMyEmails">
									</a>
									<div class="navbar-burger burger">
										<span></span>
										<span></span>
										<span></span>
									</div>
								</div>
								<div class="navbar-menu">
									<div class="navbar-end">
										<a href="<?php echo site_url(); ?>/create-signature/" class="navbar-item">Create Signature</a>
										
										<?php if(is_user_logged_in()){?>
										<div class="navbar-item has-dropdown is-hoverable">
										   <a href="#" class="navbar-link">
											  <?php 
											  
													$current_user = wp_get_current_user();
													if ( ($current_user instanceof WP_User) ) { 
														$profilePhoto =  esc_url( get_avatar_url( $current_user->ID, 32 ));
													}
											  ?>
											  <figure class="image is-18x18 nav-avatar"><img src="<?= $profilePhoto; ?>"></figure>
											  <?php echo esc_html( $current_user->display_name ); ?>
										   </a>
										   <div class="navbar-dropdown is-boxed" style="left: initial; right: 10px;">
											  <a href="#" class="navbar-item"><span class="icon"><i class="icon-server"></i></span> <span>Dashboard</span></a> 
											  <hr class="navbar-divider">
											  <a href="#" class="navbar-item"><span class="icon"><i class="icon-gear"></i></span> <span>Settings</span></a> 
											  <hr class="navbar-divider">
											  <a href="<?php echo wp_logout_url( home_url() ); ?>" class="navbar-item"><span class="icon"><i class="icon-sign-out"></i></span> <span>Log out</span></a>
										   </div>
										</div>
										<?php }else{ ?>
											<span class="navbar-item">
												<a class="button is-primary login" href="javascript:void(0)">
													<span class="icon is-small"><i class="icon-sign-in"></i></span>
													<span>Log in/Sign Up</span>
												</a>
											</span>
										<?php } ?>

									</div>
								</div>
							</nav>
						</div>
					</header>
			<?php if(is_front_page()){?>
				</div>
	
				<div class="container">
					<div class="hero-body">
						<div class="columns is-multiline">
							<div class="column is-12-tablet is-6-desktop home-heading">
								<h1 class="title is-2 is-size-1-widescreen">Beautiful HTML email signatures for your brand.</h1>
								<p class="subtitle is-hidden-mobile is-4 is-size-3-fullhd">Create your HTML email signature in 60 seconds without writing a single line of code.</p>
								<p>
									<a class="button is-white is-medium is-uppercase" href="<?php echo site_url(); ?>/create-signature/">Create My Signature &rarr;</a>
									<span class="help">*No Signup Required</span>
								</p>
							</div>
							<div class="column is-12-tablet is-6-desktop home-media">
								<div class="home-hero-image">
									<img src="<?php echo get_template_directory_uri(); ?>/images/home-signature-generator.png" alt="email signature generator">
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>	
			<?php } ?>