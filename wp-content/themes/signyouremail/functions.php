<?php
/**
 * signyouremail functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package signyouremail
 */

if ( ! function_exists( 'signyouremail_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */ 
	function signyouremail_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on signyouremail, use a find and replace
		 * to change 'signyouremail' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'signyouremail', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'signyouremail' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'signyouremail_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'signyouremail_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function signyouremail_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'signyouremail_content_width', 640 );
}
add_action( 'after_setup_theme', 'signyouremail_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function signyouremail_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'signyouremail' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'signyouremail' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'signyouremail_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function signyouremail_scripts() {
	wp_enqueue_style( 'signyouremail-style', get_stylesheet_uri() );

	wp_enqueue_script( 'signyouremail-jquery-min', get_template_directory_uri() . '/js/jquery.min.js', array(), '20151215', true );
	wp_enqueue_script( 'signyouremail-jquery-ui', get_template_directory_uri() . '/js/jquery-ui.js', array(), '20151215', true );
	wp_enqueue_script( 'signyouremail-customjs', get_template_directory_uri() . '/js/custom.js', array(), '20151215', true );
	
	wp_enqueue_script( 'signyouremail-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'signyouremail-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'signyouremail_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// register a new user
function signyouremail_add_new_member() {
  	if (isset( $_POST["register"] ) ) {
	
		/*$user_first		= $_POST["firstname"];	
		$user_last		= $_POST["lastname"];
		$user_login		= $_POST["username"];*/
		$userName		= $_POST["userName"];
		$user_email	 	= $_POST["email"];
		$user_pass		= $_POST["password"];
		$pass_confirm 	= $_POST["password_confirmation"];

		$getUsernameFromEmail = explode('@', $user_email);
		$user_name = $getUsernameFromEmail[0];
		
		// this is required for username checks
		//require_once(ABSPATH . WPINC . '/registration.php');
 
		/*if(username_exists($user_login)) {
			// Username already registered
			signyouremail_errors()->add('username_unavailable', __('Username already taken'));
		}
		if(!validate_username($user_login)) {
			// invalid username
			signyouremail_errors()->add('username_invalid', __('Invalid username'));
		}
		if($user_login == '') {
			// empty username
			signyouremail_errors()->add('username_empty', __('Please enter a username'));
		}*/
		if($userName == '') {
			// empty username
			signyouremail_errors()->add('name_empty', __('Please enter a Name'));
		}
		if(!is_email($user_email)) {
			//invalid email
			signyouremail_errors()->add('email_invalid', __('Invalid email'));
		}
		if(email_exists($user_email)) {
			//Email address already registered
			signyouremail_errors()->add('email_used', __('Email already registered'));
		}
		if($user_pass == '') {
			// passwords do not match
			signyouremail_errors()->add('password_empty', __('Please enter a password'));
		}
		if($user_pass != $pass_confirm) {
			// passwords do not match
			signyouremail_errors()->add('password_mismatch', __('Passwords do not match'));
		}
 
		$errors = signyouremail_errors()->get_error_messages();
		// only create the user in if there are no errors
		if(empty($errors)) {
			$new_user_id = wp_insert_user(array(
					'user_login'		=> $user_name,
					'display_name'		=> $userName,
					'user_email'		=> $user_email,
					'user_pass'	 		=> $user_pass,
					'first_name'		=> $userName,
					//'last_name'			=> $user_last,
					'user_registered'	=> date('Y-m-d H:i:s'),
					'role'				=> 'subscriber'
				)
			);
			if($new_user_id) {
				// send an email to the admin alerting them of the registration
				wp_new_user_notification($new_user_id);
 
				// log the new user in
				wp_setcookie($user_name, $user_pass, true);
				wp_set_current_user($new_user_id, $user_name);	
				//do_action('wp_login', $user_name);
 
				// send the newly created user to the home page after logging them in
				wp_redirect(home_url('create-signature')); exit;
			}
 
		}
 
	}
}
add_action('init', 'signyouremail_add_new_member');

// logs a member in after submitting a form
function signyouremail_login_member() {
		
	if(isset($_POST['username']) && wp_verify_nonce($_POST['signyouremail_login_nonce'], 'signyouremail-login-nonce')) {
				
		// this returns the user ID and other info from the user name
		//$user = get_userdatabylogin($_POST['username']);
		$user = get_user_by('email', $_POST['username']);
		/*echo $user->user_email.'<br>';
		print_r($user); die;*/
		//if(!$user) {
		if(!$user->user_email) {
			// if the user name doesn't exist
			signyouremail_errors()->add('empty_username', __('Invalid Email Address'));
		}
		
		if(!isset($_POST['password']) || $_POST['password'] == '') {
			// if no password was entered
			signyouremail_errors()->add('empty_password', __('Please enter a password'));
		}
				
		// check the user's login with their password
		if(!wp_check_password($_POST['password'], $user->user_pass, $user->ID)) {
			// if the password is incorrect for the specified user
			signyouremail_errors()->add('empty_password', __('Incorrect password'));
		}
		
		// retrieve all error messages
		$errors = signyouremail_errors()->get_error_messages();
		
		// only log the user in if there are no errors
		if(empty($errors)) {
			
			wp_setcookie($user->user_login, $_POST['password'], true);
			wp_set_current_user($user->ID, $user->user_login);	
			//do_action('wp_login', $_POST['username']);
			
			wp_redirect(home_url()); exit;
		}
	}
}
add_action('init', 'signyouremail_login_member');


// used for tracking error messages
function signyouremail_errors(){
    static $wp_error; // Will hold global variable safely
    return isset($wp_error) ? $wp_error : ($wp_error = new WP_Error(null, null, null));
}

// displays error messages from form submissions
function signyouremail_show_error_messages() {
	if($codes = signyouremail_errors()->get_error_codes()) {
		echo '<div class="signyouremail_errors">';
		    // Loop error codes and display errors
		   foreach($codes as $code){
		        $message = signyouremail_errors()->get_error_message($code);
		        echo '<span class="error"><strong>' . __('Error') . '</strong>: ' . $message . '</span><br/>';
		    }
		echo '</div>';
	}	
}







add_action( 'wp_ajax_custom_action', 'custom_action' );
add_action( 'wp_ajax_nopriv_custom_action', 'custom_action' );
function custom_action() {
    	
    $jsonData['name'] = $_POST['basic']['fullname'];
	$jsonData['template_id'] = $_POST['templates'];
    $jsonData['user_id'] = get_current_user_id();
    $jsonData['basic'] = $_POST['basic'];
    $jsonData['social'] = $_POST['social'];
    $jsonData['options'] = $_POST['options'];
    $jsonData['addons'] = null;
    $jsonData['generator'] = 'test';
    $jsonData['is_active'] = 1;
    $jsonData['created_at'] = date('Y-m-d h:i:s');
    $jsonData['updated_at'] = date('Y-m-d h:i:s');
    $jsonData['deleted_at'] = date('Y-m-d h:i:s');
    
	$name = $jsonData['name'];
	$template_id = $jsonData['template_id'];
	$user_id = $jsonData['user_id'];
	$basic = json_encode($jsonData['basic']);
	$social = json_encode($jsonData['social']);
	$options = json_encode($jsonData['options']);
	$addons = json_encode($jsonData['addons']);
	$generator = $jsonData['generator'];
	$is_active = $jsonData['is_active'];
	$created_at = $jsonData['created_at'];
	$updated_at = $jsonData['updated_at'];
	$deleted_at = $jsonData['deleted_at'];
	
	global $wpdb;
	$createSign = $wpdb->query("INSERT INTO wp_signatures (name, template_id, user_id, basic, social, options, addons, generator, is_active, created_at, updated_at, deleted_at) 
	VALUES ('$name', '$template_id', '$user_id', '$basic', '$social', '$options', '$addons', '$generator', '$is_active', '$created_at', '', '')"  );

	if($createSign){
		echo 'signature created!';
	}else{
		echo 'something went wronng!';
	}
	
	
	/* $basic = [
      "basic"   => $_POST['basic']
	];
	
	$social = [
      "social"   => $_POST['social']
	];
	
	$options = [
      "options"   => $_POST['options']
	];

	// Convert Array to JSON String
	$basicJSON = json_encode($basic);
	$socialJSON = json_encode($social);
	echo $basicJSON.'<br>';
	echo $socialJSON; */

    /* echo"<pre>"; print_r($_POST);
    echo"<br>";
    echo"<pre>"; print_r(json_encode($jsonData['basic']));
    echo"<pre>"; print_r(json_encode($jsonData['social']));
    echo"<pre>"; print_r(json_encode($jsonData['options']));
    echo"<pre>"; print_r(json_encode($jsonData['user_id']));
    echo"<pre>"; print_r(json_encode($jsonData['created_at']));
    echo"<pre>"; print_r(json_encode($jsonData['updated_at']));
    die; */
	exit;
}
