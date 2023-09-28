<?php
/**
 * Title: Footer
 * Slug: kntnt-canvas/footer
 * Description: Footer with logo, social icons, navigation, and text areas.
 * Categories: theme
 * Keywords: footer
 * Viewport Width: 1280
 * Block Types:
 * Post Types: wp_template, wp_template_part
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|white-0"},":hover":{"color":{"text":"var:preset|color|white-0"}}}}},"backgroundColor":"secondary-800","textColor":"white-0","className":"no-link-underline","layout":{"type":"constrained"},"fontSize":"16"} -->
<div class="wp-block-group alignfull no-link-underline has-white-0-color has-secondary-800-background-color has-text-color has-background has-link-color has-16-font-size" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:site-logo {"width":40} /-->

            <!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1"}},"className":"no-hover-underline no-link-color","fontSize":"24"} /--></div>
        <!-- /wp:group -->

        <!-- wp:social-links {"iconColor":"white-0","iconColorValue":"#ffffff","openInNewTab":true,"size":"has-normal-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
        <ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->

            <!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

            <!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /-->

            <!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->

            <!-- wp:social-link {"url":"https://www.youtube.com/","service":"youtube"} /-->

            <!-- wp:social-link {"url":"/feed","service":"feed"} /--></ul>
        <!-- /wp:social-links --></div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
    <div class="wp-block-group alignwide"><!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:paragraph -->
            <p><?php printf(
				/* translators: %s: Name of the theme */
		            esc_html( '%s is a block theme that is designed to provide a foundation on which custom themes can be created as a child themes.', 'kntnt-canvas' ),
					'Kntnt Canvas'
				); ?></p>
            <!-- /wp:paragraph --></div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"center"}} -->
        <div class="wp-block-group"><!-- wp:navigation {"ref":18,"overlayMenu":"never","layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"}} /--></div>
        <!-- /wp:group --></div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|white-0","style":"dotted","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--white-0);border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
            <p><a href="https://github.com/Kntnt/kntnt-canvas"><?php printf(
					/* translators: %s: Name of the theme */
			            esc_html( 'Theme based on %s', 'kntnt-canvas' ),
						'Kntnt Canvas'
					); ?></a></p>
            <!-- /wp:paragraph --></div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
            <p>© <?php echo date( "Y" ); ?> <?php esc_html_e( get_option( 'blogname' ) ); ?></p>
            <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
    <!-- /wp:group --></div>
<!-- /wp:group -->