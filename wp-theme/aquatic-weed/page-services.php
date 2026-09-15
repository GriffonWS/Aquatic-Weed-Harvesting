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
    <h1 class="phero__title">Seven services,<br><em>one work boat</em>.</h1>
    <p class="phero__lead">Everything below is mechanical harvesting — we physically remove the
    plant and the biomass leaves with us. Nothing is sprayed, and nothing is left to rot on the
    bottom and feed next year’s growth.</p>
    <div class="phero__cta">
      <a class="btn btn--primary btn--lg" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request an estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      <a class="btn btn--ghost btn--lg" href="tel:+15184417742">+1 (518) 441-7742</a>
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
    <!-- The seven services people actually search for, as the page's headline
         content. All seven now carry the owners' own job photos, reused from
         How it works, Who we serve and the home page — the stock and AI
         equipment shots that used to sit here were pulled because they weren't
         the client's boat. Two are stand-ins worth replacing when better
         frames come in: 06 shows material piled on the ramp rather than the
         leaves and logs the copy describes, and 07 is a water chestnut close-up
         rather than a chestnut job in progress. -->
    <div class="svcs">
      <article class="svc svc--wide reveal" id="aquatic-weed-harvesting">
        <span class="svc__num">01</span>
        <figure class="svc__media">
          <img src="<?php echo awh_img( 'crew-full-operation.webp' ); ?>" width="1280" height="960" loading="lazy" decoding="async"
            alt="The work boat, excavator and haul truck running as one operation on the bank.">
        </figure>
        <div class="svc__main">
          <h3 class="svc__title">Aquatic weed harvesting</h3>
          <p class="svc__text">The whole job, start to finish. We cut the vegetation at the root crown,
          collect it on the boat as we go, and haul the biomass off site — so nothing drifts back into
          your cove and nothing is left to rot on the bottom and feed next year's growth.</p>
        <ul class="svc__list">
          <li>Cuts to a depth of 5 feet</li>
          <li>Collects the cuttings as it cuts</li>
          <li>Off-site disposal included</li>
        </ul>
        </div>
      </article>

      <article class="svc reveal" id="lake-weed-removal">
        <figure class="svc__media">
          <img src="<?php echo awh_img( 'lake-ramp-weed.webp' ); ?>" width="1024" height="498" loading="lazy" decoding="async"
            alt="A lake covered bank to bank in weed, seen from the launch ramp.">
        </figure>
        <span class="svc__num">02</span>
        <h3 class="svc__title">Lake weed removal</h3>
        <p class="svc__text">Swim areas, dock approaches, boat lanes and the weedy corner the wind
        pushes everything into — cleared without closing the lake.</p>
        <ul class="svc__list">
          <li>Open channels and swim areas</li>
          <li>Works around docks and moorings</li>
        </ul>
      </article>

      <article class="svc reveal" id="pond-weed-removal">
        <figure class="svc__media">
          <img src="<?php echo awh_img( 'pond-estate-weed.jpg' ); ?>" width="1024" height="768" loading="lazy" decoding="async"
            alt="A private estate pond under a full mat of duckweed and algae.">
        </figure>
        <span class="svc__num">03</span>
        <h3 class="svc__title">Pond weed removal</h3>
        <p class="svc__text">Private, farm and association ponds — small, shallow water where a
        full-size harvester can't get in and can't turn around.</p>
        <ul class="svc__list">
          <li>Shallow draft, no ramp required</li>
          <li>Lily pads, cattails, algae mats</li>
        </ul>
      </article>

      <article class="svc reveal" id="shoreline-weed-removal">
        <figure class="svc__media">
          <img src="<?php echo awh_img( 'harvester-shoreline.webp' ); ?>" width="1024" height="768" loading="lazy" decoding="async"
            alt="Cut vegetation lifted out at the waterline onto the bank.">
        </figure>
        <span class="svc__num">04</span>
        <h3 class="svc__title">Shoreline weed removal</h3>
        <p class="svc__text">The waterline itself: cattail stands, phragmites and overgrowth taken
        from the water side, so nobody works off a soft bank.</p>
        <ul class="svc__list">
          <li>Cut and root-ball removal</li>
          <li>Brush cut from the water side</li>
        </ul>
      </article>

      <article class="svc reveal" id="muck-reduction">
        <figure class="svc__media">
          <img src="<?php echo awh_img( 'conveyor-load.jpg' ); ?>" width="2048" height="1536" loading="lazy" decoding="async"
            alt="A full load of decomposing weed on the boat's conveyor, on its way off the water.">
        </figure>
        <span class="svc__num">05</span>
        <h3 class="svc__title">Muck reduction</h3>
        <p class="svc__text">Muck is last year's plants. Taking the biomass out before it dies and
        settles is how you stop feeding next season's growth.</p>
        <ul class="svc__list">
          <li>Removes the nutrient load, not just the weed</li>
          <li>Firmer bottom season over season</li>
        </ul>
      </article>

      <article class="svc reveal" id="leaf-debris-removal">
        <figure class="svc__media">
          <img src="<?php echo awh_img( 'lakeside-crew.webp' ); ?>" width="1024" height="540" loading="lazy" decoding="async"
            alt="Material lifted out of the lake and piled on the concrete ramp, ready to be hauled away.">
        </figure>
        <span class="svc__num">06</span>
        <h3 class="svc__title">Leaf &amp; debris removal</h3>
        <p class="svc__text">Leaf mats, blow-in, branches and downed logs skimmed or lifted out
        before they sink and rot down into muck.</p>
        <ul class="svc__list">
          <li>Surface skimming and log removal</li>
          <li>Spring and fall clean-ups</li>
        </ul>
      </article>

      <article class="svc reveal" id="invasive-weed-removal">
        <figure class="svc__media">
          <img src="<?php echo awh_img( 'weed-chestnut.jpg' ); ?>" width="1200" height="600" loading="lazy" decoding="async"
            alt="A water chestnut rosette floating on open water, its spiked seed visible at the edge.">
        </figure>
        <span class="svc__num">07</span>
        <h3 class="svc__title">Invasive aquatic weed removal</h3>
        <p class="svc__text">Milfoil, water chestnut and hydrilla — targeted removal timed around
        each species so seeds and fragments come out with us.</p>
        <ul class="svc__list">
          <li>Timed to each species' season</li>
          <li>Fragment and seed control</li>
        </ul>
      </article>
    </div>

    <!-- One boat, four quick-change tools. Kept to a single strip so the page
         stays short — the full equipment story lives on How it works. -->
    <div class="subhead reveal">
      <h3 class="subhead__h">One boat, four tools</h3>
      <p class="subhead__p">Every service above is done from the same shallow-draft work boat, with
      the attachment the job calls for. Nothing is sprayed — whatever we cut comes out with us.
      <a class="offer__link" href="<?php echo esc_url( home_url( '/how-it-works/' ) ); ?>#equipment">See how the equipment works <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a></p>
    </div>

    <ul class="offers">
      <li class="spec reveal"><b>Cutter</b><span>Shears vegetation to 5 feet and baskets the cuttings as it cuts</span></li>
      <li class="spec reveal"><b>Vegetation bucket</b><span>Scoops root-bound growth and cattail root balls to 3 feet</span></li>
      <li class="spec reveal"><b>Skimmer bucket</b><span>Lifts algae and fine floating material off the surface</span></li>
      <li class="spec reveal"><b>Hydraulic pole saw</b><span>Branches, small trees and downed logs, worked from the water</span></li>
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
        <span><b>+1 (518) 441-7742</b></span>
      </a>
      <a class="btn btn--primary btn--lg btn--block" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Get a free quote <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
    </div>
  </div>
</section>

</main>

<?php
get_footer();
