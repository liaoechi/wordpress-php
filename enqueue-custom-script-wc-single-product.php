/* 
    Simple PHP script to enqueue css or javascript references to woocommerce's single product page.
    Place this code snippet in your child theme's function.php file.
*/

function wc_enqueue_custom_scripts() {
	if ( is_product() && is_single() ){
        wp_enqueue_style('modal-style', 'your-script-URL-here');
    } else { 
		return;
	}
}

add_action( 'wp_enqueue_scripts', 'wc_enqueue_custom_scripts' );