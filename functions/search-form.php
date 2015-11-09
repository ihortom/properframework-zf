<?php

function pweb_search_form( $form ) {
	$form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
	<div>
            <label class="screen-reader-text" for="s">' . __( 'Search for:', 'properweb' ) . '</label><br>
            <input type="text" value="' . get_search_query() . '" name="s" id="s" />
            <input type="submit" id="searchsubmit" class="button tiny round" aria-label="submit form" value="'. esc_attr__( 'Search', 'properweb' ) .'" />
	</div>
	</form>';

	return $form;
}

add_filter( 'get_search_form', 'pweb_search_form' );

?>