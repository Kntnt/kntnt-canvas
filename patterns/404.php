<?php
/**
 * Title: 404
 * Slug: kntnt-canvas/404
 * Description: 404 template content
 * Categories: theme
 * Keywords:
 * Viewport Width: 1280
 * Block Types:
 * Post Types: wp_template, wp_template_part
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80","right":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","level":1,"align":"wide"} -->
<h1 class="wp-block-heading alignwide has-text-align-center"><?php esc_html_e('Oops!', 'kntnt-canvas') ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--80)"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('The page does not exist. Check the address, or try searching the website:', 'kntnt-canvas') ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search…","width":100,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
