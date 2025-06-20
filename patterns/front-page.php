<?php
/**
 * Title: front-page
 * Slug: ovantis/front-page
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","className":"glow","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull glow"><!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"align":"full","className":"glow-right","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull glow-right"><!-- wp:group {"tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"},"color":{"text":"#F1F1F1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-text-color" style="color:#F1F1F1;padding-top:0;padding-bottom:0"><!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"65%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:65%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"lineHeight":"1.3","letterSpacing":"-1px","fontWeight":"700","fontStyle":"normal"}}} -->
<h1 class="wp-block-heading has-text-align-left" style="font-style:normal;font-weight:700;letter-spacing:-1px;line-height:1.3"><?php /* Translators: 1. is the start of a 'mark' HTML element, 2. is the end of a 'mark' HTML element, 3. is the start of a 'mark' HTML element, 4. is the end of a 'mark' HTML element */ 
echo sprintf( esc_html__( '%1$sDesigning %2$sMomentum, Crafting %3$sImpact%4$s', 'ovantis' ), '<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-custom-primary-color">', '</mark>', '<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-custom-primary-color">', '</mark>' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|custom-text-color"}}}},"textColor":"custom-text-color"} -->
<p class="has-text-align-left has-custom-text-color-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px"><?php esc_html_e('We don\'t just build websites. We shape digital ecosystems, elevate brand stories, and turn complex challenges into compelling solutions that move people and markets.', 'ovantis');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"custom-primary","style":{"color":{"text":"#ffffff"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"100px"},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-primary-background-color has-text-color has-background has-custom-font-size wp-element-button" style="border-radius:100px;color:#ffffff;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60);font-size:16px;font-style:normal;font-weight:500"><?php esc_html_e('Get Started', 'ovantis');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"width":"auto","height":"700px","sizeSlug":"full","linkDestination":"none","className":"full-width-image","style":{"border":{"width":"0px","style":"none"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border full-width-image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero.webp" alt="" class="" style="border-style:none;border-width:0px;width:auto;height:700px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h3 class="wp-block-heading has-white-color has-text-color has-link-color"><?php esc_html_e('250+', 'ovantis');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Projects Completed', 'ovantis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h3 class="wp-block-heading has-white-color has-text-color has-link-color"><?php esc_html_e('98%', 'ovantis');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Success Rate', 'ovantis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h3 class="wp-block-heading has-white-color has-text-color has-link-color"><?php esc_html_e('30+', 'ovantis');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Countries Reached', 'ovantis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"tagName":"section","layout":{"type":"constrained"}} -->
<section class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about.webp" alt="" class="" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('OUR HISTORY', 'ovantis');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-link-color"><?php esc_html_e('Driven by Vision, Built for Results', 'ovantis');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php esc_html_e('We turn ideas into impact. Powered by creativity and driven by performance, we craft tailored web solutions that elevate your agency’s online presence.', 'ovantis');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"custom-primary","style":{"color":{"text":"#ffffff"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"100px"},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-primary-background-color has-text-color has-background has-custom-font-size wp-element-button" style="border-radius:100px;color:#ffffff;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60);font-size:16px;font-style:normal;font-weight:500"><?php esc_html_e('Meet the Team', 'ovantis');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"news","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div id="news" class="wp-block-group news" style="padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('NEWS', 'ovantis');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-link-color"><?php esc_html_e('Stories That Matter', 'ovantis');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":25,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","align":"wide","style":{"border":{"radius":"60px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":6,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:separator {"opacity":"css","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<hr class="wp-block-separator has-css-opacity is-style-wide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"btn-with-icon","layout":{"type":"default"}} -->
<div class="wp-block-group btn-with-icon"><!-- wp:read-more {"content":"Read More 🡭","className":"hover-read-me"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->