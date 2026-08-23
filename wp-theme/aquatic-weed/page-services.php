<?php
/**
 * Template Name: Services
 *
 * Renders for the Page with slug "services"; awh_create_pages() creates it.
 *
 * @package aquatic-weed
 */

get_header();
?>

<main id="main">

<!-- ============ PAGE HERO ============ -->
<section class="phero on-dark">
  <div class="wrap phero__inner">
    <p class="phero__crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> <i>/</i> <b>Services</b></p>
    <h1 class="phero__title">Four quick-change<br>attachments, <em>one boat</em>.</h1>
    <p class="phero__lead">Everything is mechanical harvesting — we physically remove the plant
    and the biomass leaves with us. Nothing is sprayed, and nothing is left to rot on the bottom
    and feed next year’s growth.</p>
    <div class="phero__cta">
      <a class="btn btn--primary btn--lg" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request an estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      <a class="btn btn--ghost btn--lg" href="tel:+15184417742">(518) 441-7742</a>
    </div>
  </div>
</section>

<!-- ============ SERVICES ============ -->
<section class="section section--wavetop" id="services">
  <svg class="wavetop" viewBox="0 0 1440 130" preserveAspectRatio="none" aria-hidden="true">
    <path class="w1" d="M0 60c180 40 320-30 520-10s300 60 480 30 260-40 440-20v70H0z"/>
    <path class="w2" d="M0 80c200 30 340-20 540 5s320 50 500 20 220-30 400-15v55H0z"/>
  </svg>
  <div class="wrap">
    <!-- Text-only by design: the stock/AI equipment photos were pulled because
         they weren't the client's own boat. The photo slots go back in once the
         McNamees send shots of their machine — .svc__media styling is retained. -->
    <div class="svcs svcs--text">
      <article class="svc svc--wide reveal">
        <span class="svc__num">01</span>
        <div class="svc__main">
          <h3 class="svc__title">Cutter</h3>
          <p class="svc__text">The core service. The cutter shears vegetation at the root crown while the
          onboard basket collects it, so the cuttings never drift back into your cove. Ideal for milfoil,
          hydrilla and water chestnut mats.</p>
        </div>
        <ul class="svc__list">
          <li>Cuts down to a depth of 5 feet</li>
          <li>Collects the cuttings as it cuts</li>
          <li>Off-site disposal included</li>
        </ul>
      </article>

      <article class="svc reveal">
        <span class="svc__num">02</span>
        <h3 class="svc__title">Vegetation bucket</h3>
        <p class="svc__text">The vegetation bucket, or front end loader, scoops up vegetation to a
        3 foot depth — the heavy, root-bound material a cutter can't take.</p>
        <ul class="svc__list">
          <li>Scoops to 3 foot depth</li>
          <li>Cattail root balls &amp; matted growth</li>
        </ul>
      </article>

      <article class="svc reveal">
        <span class="svc__num">03</span>
        <h3 class="svc__title">Skimmer bucket</h3>
        <p class="svc__text">Used for finer material and algae — it lifts floating growth off the top of
        the water before it blows onto your beach.</p>
        <ul class="svc__list">
          <li>Finer material &amp; algae</li>
          <li>Surface and just below</li>
        </ul>
      </article>

      <article class="svc reveal">
        <span class="svc__num">04</span>
        <h3 class="svc__title">Hydraulic pole saw</h3>
        <p class="svc__text">Worked from the water side, so nobody has to put a ladder on a soft bank
        or drag brush back up the shoreline.</p>
        <ul class="svc__list">
          <li>Tree branches &amp; small trees</li>
          <li>Downed logs in the water</li>
        </ul>
      </article>
    </div>

    <!-- The same boat and the same four tools, listed under the names people
         actually search for. Kept as one list rather than seven service pages
         so the site stays a single page. -->
    <div class="subhead reveal">
      <h3 class="subhead__h">What we get called for</h3>
      <p class="subhead__p">Different water, different name for the job — but it is the same crew,
      the same boat, and the same rule: whatever we cut comes out with us.</p>
    </div>

    <ul class="offers">
      <li class="offer reveal">
        <h4 class="offer__h">Aquatic weed harvesting</h4>
        <p class="offer__p">The whole job, start to finish — cut the vegetation, collect it on the
        boat, and haul the biomass off site.</p>
      </li>
      <li class="offer reveal">
        <h4 class="offer__h">Lake weed removal</h4>
        <p class="offer__p">Swim areas, dock approaches, boat lanes and the weedy cove the wind
        pushes everything into.</p>
      </li>
      <li class="offer reveal">
        <h4 class="offer__h">Pond weed removal</h4>
        <p class="offer__p">Private, farm and association ponds — small, shallow water where a
        full-size harvester can't work.</p>
      </li>
      <li class="offer reveal">
        <h4 class="offer__h">Shoreline weed removal</h4>
        <p class="offer__p">The waterline itself: cattail stands, phragmites and overgrowth taken
        from the water side, not off your bank.</p>
      </li>
      <li class="offer reveal">
        <h4 class="offer__h">Muck reduction</h4>
        <p class="offer__p">Muck is last year's plants. Taking the biomass out before it dies and
        settles is how you stop feeding next season's growth.</p>
      </li>
      <li class="offer reveal">
        <h4 class="offer__h">Leaf &amp; debris removal</h4>
        <p class="offer__p">Leaf mats, blow-in, branches and downed logs skimmed or lifted out
        before they sink and rot down.</p>
      </li>
      <li class="offer reveal">
        <h4 class="offer__h">Invasive aquatic weed removal</h4>
        <p class="offer__p">Milfoil, water chestnut and hydrilla — targeted removal timed around
        each species, seeds and fragments included.</p>
      </li>
      <li class="offer offer--cta reveal">
        <h4 class="offer__h">Not sure which one you need?</h4>
        <p class="offer__p">Send a photo of your water. We'll tell you what's growing and which
        of these it actually is.</p>
        <a class="offer__link" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Get a free quote
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      </li>
    </ul>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="section section--cta on-dark">
  <div class="wrap cta">
    <div class="cta__copy reveal">
      <p class="eyebrow">Free estimate</p>
      <h2 class="cta__h">Send us a photo of your water.</h2>
      <p class="cta__p">That's all we need to start. We'll tell you what's growing, what it takes to
      clear it and what it costs — no charge, no obligation.</p>
    </div>
    <div class="cta__side reveal">
      <a class="cta__call" href="tel:+15184417742">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 3h3l2 5-2.5 1.5a11 11 0 005 5L15 12l5 2v3a2 2 0 01-2.2 2C11 18.4 5.6 13 5 6.2A2 2 0 016 3z"/></svg>
        <span><b>(518) 441-7742</b><em>or (518) 755-2770</em></span>
      </a>
      <a class="btn btn--primary btn--lg btn--block" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Get a free quote <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
    </div>
  </div>
</section>

</main>

<?php
get_footer();
