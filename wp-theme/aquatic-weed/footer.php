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
    <p class="footer__blurb">Aquatic Weed Harvesting LLC is dedicated to restoring and maintaining waterways through the mechanical removal of aquatic vegetation and debris. Based in the Hudson Valley, we serve the Northeast, including New York, New Jersey, and Pennsylvania.</p>
    <div class="footer__contact">
      <a href="tel:+15184417742">+1 (518) 441-7742</a>
      <a href="mailto:jim@wedowaterweeds.com">jim@wedowaterweeds.com</a>
      <span>49398 Leaf River Loop, Henning, MN 56551</span>
    </div>
  </div>
  <nav class="wrap footer__links" aria-label="Footer">
    <div class="footer__row">
      <h4>Services</h4>
      <div class="footer__list">
        <?php
        $awh_foot( 'aquatic-weed-harvesting', 'Aquatic weed harvesting' );
        $awh_foot( 'lake-weed-removal', 'Lake weed removal' );
        $awh_foot( 'pond-weed-removal', 'Pond weed removal' );
        $awh_foot( 'shoreline-weed-removal', 'Shoreline weed removal' );
        $awh_foot( 'muck-removal', 'Muck reduction' );
        $awh_foot( 'leaf-debris-removal', 'Leaf & debris removal' );
        $awh_foot( 'invasive-weed-control', 'Invasive aquatic weed removal' );
        ?>
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
  <a href="tel:+15184417742" class="mobilebar__call">Call now</a>
  <a href="<?php echo esc_url( home_url( '/contact/#quote' ) ); ?>" class="mobilebar__quote">Free quote</a>
</div>

<?php wp_footer(); ?>
</body>
</html>
