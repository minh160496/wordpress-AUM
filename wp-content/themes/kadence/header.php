<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kadence
 */

namespace Kadence;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js" <?php kadence()->print_microdata( 'html' ); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<?php wp_head(); ?>
</head>
<header class=" Cus_Header">
        <div class="Cus_Header_logo">
            <a href="#"><img src="logo.png" alt="Logo"></a>
        </div>
        <nav class="Cus_Header_menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Page </a>
                    <ul class="Cus_Header_menu--Page">                
                        <li><a href="#">Categories</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </nav>
		
    </header>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
/**
 * Kadence before wrapper hook.
 */
do_action( 'kadence_before_wrapper' );
?>
<div id="wrapper" class="site wp-site-blocks">
	<?php
	/**
	 * Kadence before header hook.
	 *
	 * @hooked kadence_do_skip_to_content_link - 2
	 */
	do_action( 'kadence_before_header' );

	/**
	 * Kadence header hook.
	 *
	 * @hooked Kadence/header_markup - 10
	 */
	do_action( 'kadence_header' );

	do_action( 'kadence_after_header' );
	?>

	<div id="inner-wrap" class="wrap hfeed kt-clear">
		<?php
		/**
		 * Hook for top of inner wrap.
		 */
		do_action( 'kadence_before_content' );
		?>
