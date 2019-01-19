/* Allow one item in the cart
 Answer Source:
https://stackoverflow.com/questions/21363268/need-woocommerce-to-only-allow-1-product-in-the-cart-if-a-product-is-already-in
*/
add_filter( 'woocommerce_add_cart_item_data', 'woo_custom_add_to_cart' );

function woo_custom_add_to_cart( $cart_item_data ) {

    global $woocommerce;
    $woocommerce->cart->empty_cart();

    // Do nothing with the data and return
    return $cart_item_data;
}
