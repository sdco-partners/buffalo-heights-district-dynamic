<?php
/** 
 * Functions
 *
 * Smart functions for ahw
 *
 * @link https://github.com/sdco-partners/Ashley-Hall-World
 *
 * @package WordPress
 * @subpackage ahw
 * @since 1.0
 * @version 1.0
 */

	/* Define Variables  */
	$GLOBALS['url'] = get_template_directory_uri();



	/* Add Styles, Fonts, and Javascript */


	function my_enqueue_style() {

		//<script type="text/javascript" src="//fast.fonts.net/jsapi/8cd2f97e-4a17-4a9f-8e26-eaa420c86031.js"></script>

	  wp_enqueue_script('cloud.typography', 'https://fast.fonts.net/jsapi/8cd2f97e-4a17-4a9f-8e26-eaa420c86031.js');
		wp_enqueue_style('styles', $GLOBALS['url'].'/prod/styles.css');

		wp_enqueue_script('scripts-min', $GLOBALS['url'].'/prod/scripts-min.js', array('jquery'), '1.0.0', true);

  }

  add_action( 'wp_enqueue_scripts', 'my_enqueue_style' );

  // add_theme_support( 'post-thumbnails' );

  add_action('get_header', 'remove_admin_login_header');

  function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }

?>