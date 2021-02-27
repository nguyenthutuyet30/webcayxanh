<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';

/**
 * Note: It's not recommended to add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * Learn more here: http://codex.wordpress.org/Child_Themes
 */

function my_custom_translations( $strings ) {
$text = array(
'Quick View' => 'Xem nhanh'
);
$strings = str_ireplace( array_keys( $text ), $text, $strings );
return $strings;
}
add_filter( 'gettext', 'my_custom_translations', 20 );

// Translate Shopping Cart Breadcrumb
add_filter( 'gettext', function ( $strings ) {

$text = array(
'SHOPPING CART' => 'Giỏ hàng',
'CHECKOUT DETAILS' => 'Thanh toán',
'ORDER COMPLETE' => 'Hoàn tất',
);
$strings = str_ireplace( array_keys( $text ), $text, $strings );
return $strings;
}, 20 );

add_filter( 'add_to_cart_text', 'woo_custom_cart_button_text' );                                // < 2.1
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 +
  
function woo_custom_cart_button_text() {
  
        return __( 'Thêm vào giỏ hàng', 'woocommerce' );
  
}
