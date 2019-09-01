<?php
/**
 * Template Name: Registration
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package signyouremail
 */
?>
<?php  echo get_header(); ?>
<section class="hero is-fullheight" style="background-image: linear-gradient(to right, #ffecd2 0%, #fcb69f 100%);">
   <div class="hero-body">
      <div class="container">
         <div class="columns is-vcentered">
            <div class="column is-4-widescreen is-offset-4-widescreen is-6-desktop is-offset-3-desktop is-8 is-offset-2">
               <h1 class="title">Register</h1>
               <div class="box" style="color:black;">
                   <!--<div class="content">
                     <a href="https://accounts.google.com/o/oauth2/auth?client_id=98466168261-cumaepg205b9136vkiqkbufe8hd9228f.apps.googleusercontent.com&amp;redirect_uri=https%3A%2F%2Fwww.signmyemails.com%2Flogin%2Fgoogle%2Fcallback&amp;scope=openid+profile+email&amp;response_type=code&amp;state=0xXTbgD5PMmvs9r3LwmO5hCMOWZFsGwE4WpmJgb0" class="button is-fullwidth is-danger">
                     <span class="icon is-small"><i class="icon-google"></i></span>
                     <span>Log In With Google</span>
                     </a>
                  </div>
                  <div class="content">
                     <a href="../www.facebook.com/login1265.html" class="button is-fullwidth is-info">
                     <span class="icon is-small"><i class="icon-facebook"></i></span>
                     <span>Log In With Facebook</span>
                     </a>
                  </div> -->
				  <div class="content">
					<?php echo do_shortcode('[miniorange_social_login]') ?>
				  </div>
                  <span class="has-line-behind"><span>OR</span></span>
                  <form class="form" role="form" method="POST" action="">
				  <?php 
					// show any error messages after form submission
					signyouremail_show_error_messages(); ?>
		
		
                     <!-- <div class="field">
                        <label for="firstname" class="label">First name</label>
                        <p class="control">
                           <input id="firstname" type="text" class="input " name="firstname" value="" required>
                        </p>
                     </div>
                                     <div class="field">
                        <label for="lastname" class="label">Last name</label>
                        <p class="control">
                           <input id="lastname" type="text" class="input " name="lastname" value="" required>
                        </p>
                     </div>
                                     <div class="field">
                        <label for="username" class="label">Username</label>
                        <p class="control">
                           <input id="username" type="text" class="input " name="username" value="" required>
                        </p>
                     </div> -->
               <div class="field">
                  <label for="userName" class="label">Name</label>
                  <p class="control">
                     <input id="userName" type="text" class="input " name="userName" value="" required>
                  </p>
               </div>
					 <div class="field">
                        <label for="email" class="label">E-Mail Address</label>
                        <p class="control">
                           <input id="email" type="email" class="input " name="email" value="" required>
                        </p>
                     </div>
                     <div class="field">
                        <label for="password" class="label">Password</label>
                        <p class="control">
                           <input id="password" type="password" class="input " name="password" required>
                        </p>
                     </div>
                     <div class="field">
                        <label for="password-confirm" class="label">Confirm Password</label>
                        <p class="control">
                           <input id="password-confirm" type="password" class="input " name="password_confirmation" required>
                        </p>
                     </div>
                     <div class="field">
                        <p class="control">
                           <label class="checkbox">
                           <input type="checkbox" name="agreement" required> I agree to the <a href="<?php echo home_url('terms'); ?>" target="_blank">Terms of Use</a> and <a href="<?php echo home_url('privacy'); ?>" target="_blank">Privacy Policy</a>
                           </label>
                        </p>
                     </div>
                     <div class="field">
                        <p class="control">
                           <input name="register" class="button is-primary has-extra-padding" type="submit">
                           <!--<button class="button is-primary has-extra-padding" type="submit">Register</button> -->
                        </p>
                     </div>
                  </form>
               </div>
               <p class="has-text-centered">
                  <a href="<?php echo home_url('login'); ?>">Login</a>
                  |
                  <a href="javascript:void(0)">Forgot password</a>
                  |
                  <a href="javascript:void(0)">Need help?</a>
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<?php  echo get_footer(); ?>