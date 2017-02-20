<?php
/**
 * The template for displaying the navbar wrapper.
 * The navbar wrapper contains:
 * Social Block
 * Tagline
 * ( Woocommerce Cart Icon )
 * Navbar menus
 * Navbar menu buttons
 */
?>
<div class="primary-navbar__wrapper row <?php czr_fn_echo('element_class') ?>" <?php czr_fn_echo('element_attributes') ?>>
    <?php czr_fn_render_template(  'header/branding_wrapper', array(
      'model_args' => array(
        'with_nav_utils' => true
      )
    ) ) ?>
    <?php czr_fn_render_template(  'header/nav_container', array(
      'model_args' => array(
        'with_nav_utils' => false
      )
    ) ) ?>
</div>