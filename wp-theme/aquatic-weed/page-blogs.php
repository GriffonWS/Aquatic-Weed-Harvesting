<?php
/**
 * Template Name: Blogs
 *
 * Renders for the Page with slug "blogs"; awh_create_pages() creates it.
 * Content mirrors the approved static blogs.html.
 *
 * @package aquatic-weed
 */

get_header();
?>

<main id="main">

<!-- ============ PAGE HERO ============ -->
<section class="xhero on-dark">
  <div class="wrap">
    <div class="xhero__grid">
      <div class="xhero__copy">
        <p class="phero__crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> <i>/</i> <a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>">Resources</a> <i>/</i> <b>Blog &amp; guides</b></p>
        <h1 class="xhero__title">Aquatic Weed Removal <em>Guides</em></h1>
        <p class="xhero__lead">Explore comprehensive guides on aquatic weed removal, mechanical harvesting, and sustainable maintenance for lakes, ponds, and shorelines across New York, New Jersey, and Pennsylvania.</p>
        <div class="xhero__cta">
          <a class="btn btn--primary btn--lg" href="#guides">Read the Guides <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
          <a class="btn btn--ghost btn--lg" href="tel:+15184417742">+1 (518) 441-7742</a>
        </div>
      </div>

      <figure class="xhero__media reveal">
        <img src="<?php echo awh_img( 'cleanlake.webp' ); ?>" width="2048" height="1536" fetchpriority="high" decoding="async"
          alt="Open, clear water on a lake after harvesting.">
      </figure>
    </div>
  </div>
</section>

<!-- ============ LATEST GUIDES ============ -->
<section class="section section--wavetop" id="guides">
  <svg class="wavetop" viewBox="0 0 1440 130" preserveAspectRatio="none" aria-hidden="true">
    <path class="w1" d="M0 60c180 40 320-30 520-10s300 60 480 30 260-40 440-20v70H0z"/>
    <path class="w2" d="M0 80c200 30 340-20 540 5s320 50 500 20 220-30 400-15v55H0z"/>
  </svg>
  <div class="wrap">
    <div class="section__head reveal">
      <p class="eyebrow">Blog &amp; Guides</p>
      <h2 class="h2">Latest Guides</h2>
    </div>

    <div class="wfront wfront--4">
      <a class="wfrontCard guide reveal" href="<?php echo esc_url( home_url( '/why-mechanical/' ) ); ?>">
        <img src="<?php echo awh_img( 'mechanical.webp' ); ?>" width="1600" height="1200" loading="lazy" decoding="async"
             alt="The work boat harvesting a weed-choked pond, with the excavator and haul truck on the bank.">
        <div class="wfrontCard__body">
          <h3 class="wfrontCard__h">Why Choose Mechanical Weed Removal?</h3>
          <p class="wfrontCard__p">Learn how mechanical harvesting cuts, collects, and removes unwanted vegetation without applying aquatic herbicides.</p>
          <span class="guide__cta">Read the guide <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></span>
        </div>
      </a>

      <a class="wfrontCard guide reveal" href="<?php echo esc_url( home_url( '/' ) ); ?>#weeds">
        <img src="<?php echo awh_img( 'weed-chestnut.jpg' ); ?>" width="1200" height="600" loading="lazy" decoding="async"
             alt="Water chestnut rosettes covering the surface of the water.">
        <div class="wfrontCard__body">
          <h3 class="wfrontCard__h">Common Aquatic Weeds to Look Out For</h3>
          <p class="wfrontCard__p">Identify Eurasian watermilfoil, water chestnut, hydrilla, phragmites, cattails, lily pads, and other common aquatic growth.</p>
          <span class="guide__cta">Read the guide <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></span>
        </div>
      </a>

      <a class="wfrontCard guide reveal" href="<?php echo esc_url( home_url( '/how-it-works/' ) ); ?>">
        <img src="<?php echo awh_img( 'conveyor-load.jpg' ); ?>" width="2048" height="1536" loading="lazy" decoding="async"
             alt="Harvested vegetation coming up the conveyor to be loaded for removal.">
        <div class="wfrontCard__body">
          <h3 class="wfrontCard__h">How Aquatic Weed Harvesting Works</h3>
          <p class="wfrontCard__p">Follow the removal process from the initial assessment to cutting, biomass collection, and final cleanup.</p>
          <span class="guide__cta">Read the guide <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></span>
        </div>
      </a>

      <a class="wfrontCard guide reveal" href="<?php echo esc_url( home_url( '/municipal-weed-management/' ) ); ?>">
        <img src="<?php echo awh_img( 'lakeside-crew.webp' ); ?>" width="1024" height="540" loading="lazy" decoding="async"
             alt="The crew working along the shore of a shared lake.">
        <div class="wfrontCard__body">
          <h3 class="wfrontCard__h">Planning Weed Removal for Shared Waterways</h3>
          <p class="wfrontCard__p">Learn how lake associations and municipalities plan treatment areas, scheduling, permits, and seasonal maintenance.</p>
          <span class="guide__cta">Read the guide <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></span>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="section section--cta on-dark">
  <div class="wrap cta">
    <div class="cta__copy reveal">
      <p class="eyebrow">Free Estimate</p>
      <h2 class="cta__h">Need Help Identifying a Problem?</h2>
      <p class="cta__p">Tell us what is affecting your lake, pond, or shoreline, and we will recommend an
      appropriate next step.</p>
    </div>
    <div class="cta__side reveal">
      <a class="cta__call" href="tel:+15184417742">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 3h3l2 5-2.5 1.5a11 11 0 005 5L15 12l5 2v3a2 2 0 01-2.2 2C11 18.4 5.6 13 5 6.2A2 2 0 016 3z"/></svg>
        <span><b>Call +1 (518) 441-7742</b></span>
      </a>
      <a class="btn btn--primary btn--lg btn--block" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Ask About Your Waterbody <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
    </div>
  </div>
</section>

</main>

<?php
get_footer();
