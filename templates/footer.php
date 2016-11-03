<?php
/**
 * The template for displaying the site footer
 *
 */
?>
<footer id="footer" class="container-fluid footer__wrapper">
  <?php
  do_action( '__before_inner_footer' );

  if ( czr_fn_has( 'footer_widgets' ) )
    czr_fn_render_template( 'footer/footer_widgets');

  if ( czr_fn_has( 'footer_colophon' ) )
    czr_fn_render_template( 'footer/colophon', 'footer_colophon' );

  do_action( '__after_inner_footer' );
  ?>
</footer>

