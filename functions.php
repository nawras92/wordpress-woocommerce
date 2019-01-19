/* Allow one item in the cart
 Answer Source:
https://stackoverflow.com/questions/21363268/need-woocommerce-to-only-allow-1-product-in-the-cart-if-a-product-is-already-in
*/
add_filter( 'woocommerce_add_cart_item_data', '_empty_cart' );

    function _empty_cart( $cart_item_data ) {

        WC()->cart->empty_cart();

        return $cart_item_data;
    }
