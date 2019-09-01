<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package signyouremail
 */

?>




<footer class="footer">
	<div class="container is-fluid">
		<div class="content has-text-centered">
			<p>
				<a href="<?php echo site_url(); ?>/">Home</a> •
				<a href="<?php echo site_url(); ?>/login/">Login</a> •
				<a href="<?php echo site_url(); ?>/registration/">Register</a> •
				<a href="<?php echo site_url(); ?>/pricing">Pricing</a> •
				<a href="<?php echo site_url(); ?>/terms/">Terms</a> •
				<a href="<?php echo site_url(); ?>/privacy/">Privacy</a> •
				<a href="<?php echo site_url(); ?>/contact-us/">Contact Us</a>
			</p>
			<p>
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Copyright &copy;2019  %s', 'signyouremail' ), 'SignYourEmail.io' );
				?>
			</p>
		</div>
	</div>
</footer>

<div class="modal is-active is-small" id="loginModal" style="display: none;">
   <div class="modal-card" style="">
      <header class="modal-card-head">
         <span class="modal-card-title">
         <div>Log In</div>
         </span> <button class="delete"></button>
      </header>
      <section class="modal-card-body">
         <div>
            <!-- <div class="field"><a href="javascript:void(0)" class="button is-fullwidth is-danger"><span class="icon is-small"><i class="icon-google"></i></span> <span>Login With Google</span></a></div>
            <div class="field"><a href="javascript:void(0)" class="button is-fullwidth is-info"><span class="icon is-small"><i class="icon-facebook"></i></span> <span>Login With Facebook</span></a></div> -->

			<?php echo do_shortcode('[miniorange_social_login]') ?>
			  
            <span class="has-line-behind"><span>OR</span></span> 
            <form role="form" method="POST" action="" class="form">
            	<?php
					// show any error messages after form submission
					signyouremail_show_error_messages(); ?>
               <div class="field">
                  <p class="control"><input id="username" type="username" name="username" placeholder="Email" required="required" autofocus="autofocus" class="input"></p>
               </div>
               <div class="field">
                  <p class="control"><input id="password" type="password" name="password" placeholder="Password" required="required" class="input"></p>
               </div>
               <div class="field">
                  <p class="control"><label class="checkbox"><input type="checkbox" name="remember"> Remember Me
                     </label>
                  </p>
               </div>
               <div class="field">
                  <p class="control">
                  	<input type="hidden" name="signyouremail_login_nonce" value="<?php echo wp_create_nonce('signyouremail-login-nonce'); ?>"/>
                     <button type="submit" name="loginbtn" class="button is-primary is-fullwidth"><span class="icon is-small"><i class="icon-sign-in"></i></span> <span>Login</span></button> <!---->
                  </p>
               </div>
            </form>
         </div>
      </section>
      <footer class="modal-card-foot"><a href="javascript:void(0)" class="is-uppercase mr-a signupEnable">Sign Up</a> <a href="javascript:void(0)" class="is-uppercase">Forgot Password?</a></footer>
   </div>
</div>
<div class="modal is-active is-small" id="signupModal" style="display: none;">
   <div class="modal-card" style="">
      <header class="modal-card-head">
         <div class="modal-card-title">
         <div>SignUp</div>
         </div> <button class="delete"></button>
      </header>
      <section class="modal-card-body">
         <!----> <!----> 
         <div>
           <!--  <div class="field"><a href="/login/google" class="button is-fullwidth is-danger"><span class="icon is-small"><i class="icon-google"></i></span> <span>Login With Google</span></a></div>
           <div class="field"><a href="/login/facebook" class="button is-fullwidth is-info"><span class="icon is-small"><i class="icon-facebook"></i></span> <span>Login With Facebook</span></a></div> -->
           
			<?php echo do_shortcode('[miniorange_social_login]') ?>

            <span class="has-line-behind"><span>OR</span></span> 
            <form role="form" method="POST" action="" class="form">
                <?php 
					// show any error messages after form submission
					signyouremail_show_error_messages(); ?>
               <div class="field">
                  <p class="control">
                     <input type="userName" name="userName" placeholder="Name" required="required" autofocus="autofocus" class="input"> <!---->
                  </p>
               </div>
               <div class="field">
                  <p class="control">
                     <input type="email" name="email" placeholder="Email" required="required" class="input"> <!---->
                  </p>
               </div>
               <div class="field">
                  <p class="control">
                     <input type="password" name="password" placeholder="Password" required="required" class="input"> <!---->
                  </p>
               </div>
               <div class="field">
                  <p class="control">
                     <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password" required="required" class="input"> <!---->
                  </p>
               </div>
               <div class="field">
                  <p class="control">
                     <label class="checkbox"><input type="checkbox" name="agreement" required="required" class=""> I agree to the <a href="<?php echo home_url('terms'); ?>" target="_blank">Terms of Use</a> and <a href="<?php echo home_url('privacy'); ?>" target="_blank">Privacy Policy</a>.
                     </label> <!---->
                  </p>
               </div>
               <div class="field">
                  <p class="control"><button name="register" type="submit" class="button is-primary is-fullwidth"><span class="icon is-small"><i class="icon-sign-in"></i></span> <span>Signup</span></button></p>
               </div>
            </form>
         </div>
      </section>
      <footer class="modal-card-foot"><a href="javascript:void(0)" class="is-uppercase mr-a loginEnable">Login</a> <a href="javascript:void(0)" class="is-uppercase">Forgot Password?</a></footer>
   </div>
</div>

</div><!-- #main -->
<?php wp_footer(); ?>
<script>

	$(".navbar.is-transparent .navbar-burger").click(function(){
	  	$(".navbar-menu").toggleClass("is-active");
		$(this).addClass('is-active');
	});

	$('a.button.is-primary.login').click( function(){
		$('#loginModal').css('display', 'block');
	});
	$('.signupEnable').click( function(){
		$("#signupModal").slideToggle("slow");
		$('#loginModal').css('display', 'none');  
		$('#signupModal').css('display', 'block');  
	});
	$('.loginEnable').click( function(){
		$("#loginModal").slideToggle("slow");
		$('#loginModal').css('display', 'block');  
		$('#signupModal').css('display', 'none');  
	});

	$('#loginModal .delete').click( function(){
	    $('#loginModal').css('display', 'none');
	});
	$('#signupModal .delete').click( function(){
	    $('#signupModal').css('display', 'none');
	});
	window.onload = function(){
	jQuery('a.btn.btn-mo.btn-block.btn-social.btn-customtheme.btn-custom-dec.login-button').css('width', '100%');
}
</script>
<style>
.hero.is-info .navbar-menu {
 /*   background-color: #38b6ff;*/
}
</style>
</body>
</html>
