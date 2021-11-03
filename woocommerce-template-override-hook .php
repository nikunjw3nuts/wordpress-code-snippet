<?php
//declare WC support
function aventurine_child_wc_support() {
  add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'aventurine_child_wc_support' );
?>
