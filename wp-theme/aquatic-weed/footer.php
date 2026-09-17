<?php
/**
 * Footer, sticky mobile bar, closing tags.
 *
 * @package aquatic-weed
 */

?>
<!-- ============ FOOTER ============ -->
<footer class="footer on-dark">
  <div class="wrap footer__grid">
    <div class="footer__brand">
      <img class="footer__logo" src="<?php echo awh_img( 'logo-256.png' ); ?>" width="256" height="256" loading="lazy"
           alt="Got Lake Weeds? — Aquatic Weed Harvesting LLC">
      <p class="footer__blurb">Aquatic Weed Harvesting LLC — mechanical aquatic vegetation and debris
      removal for lakes and ponds. Based in west-central Minnesota, serving the Upper Midwest: Minnesota,
      North Dakota and Wisconsin.</p>
    </div>
    <div>
      <h4>Services</h4>
      <a href="<?php echo esc_url( home_url( '/aquatic-weed-harvesting/' ) ); ?>">Aquatic weed harvesting</a>
      <a href="<?php echo esc_url( home_url( '/lake-weed-removal/' ) ); ?>">Lake weed removal</a>
      <a href="<?php echo esc_url( home_url( '/pond-weed-removal/' ) ); ?>">Pond weed removal</a>
      <a href="<?php echo esc_url( home_url( '/shoreline-weed-removal/' ) ); ?>">Shoreline weed removal</a>
      <a href="<?php echo esc_url( home_url( '/muck-removal/' ) ); ?>">Muck reduction</a>
      <a href="<?php echo esc_url( home_url( '/leaf-debris-removal/' ) ); ?>">Leaf &amp; debris removal</a>
      <a href="<?php echo esc_url( home_url( '/invasive-weed-control/' ) ); ?>">Invasive aquatic weed control</a>
    </div>
    <div>
      <h4>Company</h4>
      <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About us</a>
      <a href="<?php echo esc_url( home_url( '/who-we-serve/' ) ); ?>">Who we serve</a>
      <a href="<?php echo esc_url( home_url( '/why-mechanical/' ) ); ?>">Why mechanical</a>
      <a href="<?php echo esc_url( home_url( '/how-it-works/' ) ); ?>">How it works</a>
      <a href="<?php echo esc_url( home_url( '/#weeds' ) ); ?>">What we remove</a>
      <a href="<?php echo esc_url( home_url( '/how-it-works/#boat' ) ); ?>">The boat</a>
      <a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>">Resources</a>
      <a href="<?php echo esc_url( home_url( '/contact/#quote' ) ); ?>">Free quote</a>
    </div>
    <div>
      <h4>Get in touch</h4>
      <a href="tel:+15184417742">Troy — +1 (518) 441-7742</a>
      <a href="mailto:jim@wedowaterweeds.com">jim@wedowaterweeds.com</a>
      <span>49398 Leaf River Loop, Henning, MN 56551</span>
    </div>
  </div>
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
