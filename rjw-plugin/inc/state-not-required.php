<?php
/*Makes State Field not required*/
add_filter( 'woocommerce_billing_fields', 'wc_npr_filter_state', 10, 1 );
 
function wc_npr_filter_state( $state_field ) {
$state_field['billing_state']['required'] = false;
return $state_field;
}