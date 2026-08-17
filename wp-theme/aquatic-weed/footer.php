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
      removal for lakes and ponds. Based in the Hudson Valley, serving the Northeast: New York,
      New Jersey and Pennsylvania.</p>
    </div>
    <div>
      <h4>Services</h4>
      <a href="#services">Cutter</a>
      <a href="#services">Vegetation bucket</a>
      <a href="#services">Skimmer bucket</a>
      <a href="#services">Hydraulic pole saw</a>
    </div>
    <div>
      <h4>Company</h4>
      <a href="#why">Why mechanical</a>
      <a href="#boat">The boat</a>
      <a href="#process">How it works</a>
      <a href="#weeds">What we remove</a>
      <a href="#quote">Free quote</a>
    </div>
    <div>
      <h4>Get in touch</h4>
      <a href="tel:+15184417742">Jim McNamee — (518) 441-7742</a>
      <a href="tel:+15187552770">Kathy McNamee — (518) 755-2770</a>
      <a href="mailto:jim@wedowaterweeds.com">jim@wedowaterweeds.com</a>
      <span>PO Box 39, Craryville, NY 12521</span>
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
  <a href="#quote" class="mobilebar__quote">Free quote</a>
</div>

<?php wp_footer(); ?>
</body>
</html>
