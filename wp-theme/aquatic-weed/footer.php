<?php
/**
 * Footer, sticky mobile bar, closing tags.
 *
 * Compact layout: logo / blurb / contact on one row, then the two link groups
 * as wrapped inline rows, then the copyright bar.
 *
 * @package aquatic-weed
 */

// footer link for a Page, marked as the current page when we're on it
$awh_foot = static function ( $slug, $label, $frag = '' ) {
	$current = ( '' === $frag && is_page( $slug ) ) ? ' aria-current="page"' : '';
	printf(
		'<a href="%s%s"%s>%s</a>' . "\n",
		esc_url( home_url( '/' . $slug . '/' ) ),
		esc_attr( $frag ),
		$current, // phpcs:ignore WordPress.Security.EscapeOutput -- fixed literal
		esc_html( $label )
	);
};
?>
<!-- ============ FOOTER ============ -->
<footer class="footer on-dark">
  <div class="wrap footer__top">
    <a class="footer__brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="footer__logo" src="<?php echo awh_img( 'logo-256.png' ); ?>" width="256" height="256" loading="lazy" alt="Got Lake Weeds? — Aquatic Weed Harvesting LLC"></a>
    <p class="footer__blurb">Aquatic Weed Harvesting LLC is dedicated to restoring and maintaining waterways through the mechanical removal of aquatic vegetation and debris. Based in the Hudson Valley, we serve the Northeast and beyond.</p>
    <div class="footer__contact">
      <a href="tel:+15184417742">+1 (518) 441-7742</a>
      <a href="mailto:jim@wedowaterweeds.com">jim@wedowaterweeds.com</a>
      <span>PO Box 39, Craryville, NY 12521</span>
    </div>
  </div>
  <nav class="wrap footer__links" aria-label="Footer">
    <div class="footer__row">
      <h4>Services</h4>
      <div class="footer__list">
        <?php
        $awh_foot( 'aquatic-weed-harvesting', 'Aquatic Weed Harvesting' );
        $awh_foot( 'lake-weed-removal', 'Lake Weed Removal' );
        $awh_foot( 'pond-weed-removal', 'Pond Weed Removal' );
        $awh_foot( 'shoreline-weed-removal', 'Shoreline Weed Removal' );
        $awh_foot( 'muck-removal', 'Muck Reduction' );
        $awh_foot( 'leaf-debris-removal', 'Leaf & Debris Removal' );
        $awh_foot( 'invasive-weed-control', 'Invasive Aquatic Weed Removal' );
        ?>
      </div>
    </div>
    <div class="footer__row">
      <h4>Resources</h4>
      <div class="footer__list">
        <?php $awh_foot( 'resources', 'Blog & Guides', '#blogs' ); ?>
      </div>
    </div>
  </nav>
  <div class="wrap footer__bar">
    <span>&copy; <span id="year"><?php echo esc_html( gmdate( 'Y' ) ); ?></span> Aquatic Weed Harvesting LLC. All rights reserved.</span>
    <span>wedowaterweeds.com</span>
  </div>
</footer>

<!-- sticky mobile bar -->
<div class="mobilebar on-dark">
  <a href="tel:+15184417742" class="mobilebar__call">Call Now</a>
  <a href="<?php echo esc_url( home_url( '/contact/#quote' ) ); ?>" class="mobilebar__quote">Free Quote</a>
</div>

<?php wp_footer(); ?>
</body>
</html>
