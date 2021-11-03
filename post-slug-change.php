<?php
function golden_oak_web_design_blog_generate_rewrite_rules( $wp_rewrite ) {
	$new_rules = array(
	'news/([^/]+)/?$' => 'index.php?post_type=post&name=$matches[1]',
	 );
	 $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}
add_action( 'generate_rewrite_rules', 'golden_oak_web_design_blog_generate_rewrite_rules' );

function golden_oak_web_design_update_post_link( $post_link, $id = 0 ) {
	$post = get_post( $id );
  if( is_object( $post ) && $post->post_type == 'post' ) {
    return home_url( '/news/' . $post->post_name );
  }
  return $post_link;
}
add_filter( 'post_link', 'golden_oak_web_design_update_post_link', 1, 3 );
?>
