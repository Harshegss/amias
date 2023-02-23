<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php 
	astra_content_after();
		
	astra_footer_before();
		
	astra_footer();
		
	astra_footer_after(); 
?>
	</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer();
?>

	<?php
if(get_the_ID() == 2191){ ?>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<?php }
?>
<!-- <script>
	let sjdksj = document.querySelectorAll('#jahsdkjha .elementor-icon-list-text')
// 	console.log();
	document.querySelectorAll('.hidden_random input')[0].setAttribute("value", '<?php // echo bin2hex(random_bytes(10));?>')
	</script> -->
	</body>
</html>
