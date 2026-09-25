<?php
/**
 * Template Name: Why mechanical
 *
 * Renders for the Page with slug "why-mechanical"; awh_create_pages() creates it.
 * Content mirrors the approved static why-mechanical.html.
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
        <p class="phero__crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> <i>/</i> <b>Why mechanical</b></p>
        <h1 class="xhero__title">Don’t Sink the Problem. <em>Remove It.</em></h1>
        <p class="xhero__lead">Based in the Hudson Valley, Aquatic Weed Harvesting LLC provides sustainable mechanical weed control across New York, New Jersey, and Pennsylvania. We cut, collect, and remove unwanted aquatic vegetation and biomass without applying herbicides or leaving harvested plant material in the water.</p>
        <div class="xhero__cta">
          <a class="btn btn--primary btn--lg" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request an Estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
          <a class="btn btn--ghost btn--lg" href="tel:+15184417742">+1 (518) 441-7742</a>
        </div>
      </div>

      <figure class="xhero__media reveal">
        <img src="<?php echo awh_img( 'mechanical.webp' ); ?>" width="1600" height="1200" fetchpriority="high" decoding="async"
          alt="The work boat harvesting a weed-choked pond, with the excavator and haul truck on the bank.">
      </figure>
    </div>
  </div>
</section>

<!-- ============ CHEMICAL TREATMENT VS MECHANICAL ============ -->
<section class="section section--wavetop" id="why">
  <svg class="wavetop" viewBox="0 0 1440 130" preserveAspectRatio="none" aria-hidden="true">
    <path class="w1" d="M0 60c180 40 320-30 520-10s300 60 480 30 260-40 440-20v70H0z"/>
    <path class="w2" d="M0 80c200 30 340-20 540 5s320 50 500 20 220-30 400-15v55H0z"/>
  </svg>
  <div class="wrap">
    <div class="compare">
      <article class="cmp cmp--bad reveal">
        <h3 class="cmp__head"><span class="cmp__mark" aria-hidden="true">✕</span> Chemical Treatment</h3>
        <p class="cmp__intro">Chemical treatment controls susceptible plants in place rather than
        physically removing them from the water.</p>
        <ul class="cmp__list">
          <li>Dead vegetation can settle on the bottom and contribute additional organic material.</li>
          <li>Results depend on the plant species, product, water conditions, and timing.</li>
          <li>Some treatments require temporary water-use restrictions.</li>
          <li>Repeated applications may be needed as vegetation returns.</li>
          <li>Treatment is applied beyond individual plants within the designated area.</li>
        </ul>
      </article>

      <article class="cmp cmp--good reveal">
        <h3 class="cmp__head"><span class="cmp__mark" aria-hidden="true">✓</span> Mechanical Harvesting</h3>
        <p class="cmp__intro">Mechanical harvesting cuts and collects vegetation from selected areas of
        the waterbody.</p>
        <ul class="cmp__list">
          <li>Physically removes existing aquatic growth.</li>
          <li>Collects cut vegetation and loose fragments during harvesting.</li>
          <li>Targets docks, swim areas, boat lanes, shorelines, and other priority areas.</li>
          <li>Removes plant biomass instead of intentionally leaving it to decompose.</li>
          <li>Uses no aquatic herbicides.</li>
          <li>Provides immediate, visible results in the harvested area.</li>
        </ul>
      </article>
    </div>

    <p class="cmp__note reveal"><b>Note:</b> Mechanical harvesting controls existing growth but does
    not guarantee permanent eradication. Regrowth varies by species, growing conditions, and
    vegetation remaining outside the treatment area.</p>

    <div class="factbar reveal">
      <div class="fact">
        <b class="fact__num stat__num" data-count="177">177</b>
        <span class="fact__label">plant species worldwide have developed resistance to herbicides</span>
      </div>
      <div class="fact">
        <b class="fact__num stat__num" data-count="70" data-suffix="+">70+</b>
        <span class="fact__label">of them in the United States, most in agricultural systems</span>
      </div>
      <div class="fact">
        <b class="fact__num stat__num" data-count="0">0</b>
        <span class="fact__label">chemicals introduced to your water by mechanical harvesting</span>
      </div>
    </div>
  </div>
</section>

<!-- ============ MILFOIL ============ -->
<section class="section section--band on-dark" id="milfoil">
  <div class="wrap">
    <article class="spotlight reveal">
      <div class="spotlight__lede">
        <p class="spotlight__tag">Why Milfoil Requires Careful Removal</p>
        <h3 class="spotlight__h">Eurasian Watermilfoil</h3>
        <p class="spotlight__note">Eurasian watermilfoil can spread through loose fragments and quickly
        restrict swimming, boating, and shoreline access. Careful mechanical harvesting cuts and removes
        vegetation in priority areas, helping control existing growth without applying herbicides.</p>
        <p class="spotlight__note">Seasonal maintenance may be needed as milfoil can return from
        remaining vegetation or fragments elsewhere in the waterbody.</p>
      </div>
      <figure class="spotlight__media">
        <img src="<?php echo awh_img( 'weed-milfoil.jpg' ); ?>" width="1200" height="600" loading="lazy" decoding="async"
          alt="Eurasian milfoil growing in a dense underwater stand, its tips breaking the surface.">
      </figure>
    </article>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="section section--cta on-dark">
  <div class="wrap cta">
    <div class="cta__copy reveal">
      <p class="eyebrow">Free Estimate</p>
      <h2 class="cta__h">Show Us What Is Growing</h2>
      <p class="cta__p">Tell us what is growing and how it is affecting the property. Include photos if
      available. We will review the problem, explain whether mechanical harvesting is appropriate, and
      provide a no-obligation estimate.</p>
    </div>
    <div class="cta__side reveal">
      <a class="cta__call" href="tel:+15184417742">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 3h3l2 5-2.5 1.5a11 11 0 005 5L15 12l5 2v3a2 2 0 01-2.2 2C11 18.4 5.6 13 5 6.2A2 2 0 016 3z"/></svg>
        <span><b>Call +1 (518) 441-7742</b></span>
      </a>
      <a class="btn btn--primary btn--lg btn--block" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Get a Free Quote <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
    </div>
  </div>
</section>

</main>

<?php
get_footer();
