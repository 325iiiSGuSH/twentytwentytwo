<?php
/**
 * Default footer
 */
return array(
	'title'      => __( 'Default footer', 'twentytwentytwo' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignwide animate-pulse" style="padding-top:4rem;padding-bottom:4rem; color:#1A7FA8"><!-- wp:site-title {"level":0} /-->

					<!-- wp:paragraph {"align":"left"} -->
					<p class="has-text-align-left animate-pulse" style="color:#1A7FA8"">Kernel Afrika © 2023 Copyright Reserved</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->',
);
