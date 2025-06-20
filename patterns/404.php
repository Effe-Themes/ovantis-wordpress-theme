<?php
/**
 * Title: 404
 * Slug: ovantis/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","className":"glow-left","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<main class="wp-block-group glow-left" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"200px"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="font-size:200px"><?php /* Translators: 1. is the start of a 'mark' HTML element, 2. is the end of a 'mark' HTML element */ 
echo sprintf( esc_html__( '4%1$s0%2$s4', 'ovantis' ), '<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-custom-primary-color">', '</mark>' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Oops! Page Not Found', 'ovantis');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('We couldn\'t find the page you\'re looking for. It might have been moved or no longer exists.', 'ovantis');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"custom-primary","style":{"color":{"text":"#ffffff"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"100px"},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-primary-background-color has-text-color has-background has-custom-font-size wp-element-button" href="/" style="border-radius:100px;color:#ffffff;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60);font-size:16px;font-style:normal;font-weight:500"><?php esc_html_e('Back to Home', 'ovantis');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->