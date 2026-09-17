<?php
/**
 * Template Name: Services
 *
 * Renders for the Page with slug "services"; awh_create_pages() creates it.
 * Content mirrors the approved static services.html.
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
    <h1 class="phero__title">Mechanical Aquatic Weed Removal Services</h1>
    <p class="phero__lead">Aquatic weeds can block docks, restrict swimming, interfere with boating, and overwhelm shallow water. Our mechanical aquatic weed removal service clears unwanted vegetation from lakes, ponds, shorelines, and waterfront access points. We cut, collect, and remove aquatic weeds and debris using a specialized shallow-water work boat.</p>
    <p class="phero__lead">Serving residential, commercial, association, and municipal properties throughout the Hudson Valley and the surrounding areas.</p>
    <div class="phero__cta">
      <a class="btn btn--primary btn--lg" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request a Free Mechanical Removal Estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
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
    <div class="subhead reveal">
      <h2 class="subhead__h">A Mechanical Solution for Every Part of the Waterfront</h2>
      <div class="subhead__body">
        <p class="subhead__p">Whether the problem is below the surface, along the shoreline, or collecting around your dock, we use the right attachment to remove it.</p>
        <p class="subhead__p">From invasive weed removal to seasonal debris cleanup, every service is completed mechanically. The collected vegetation and debris are removed and hauled away from the property.</p>
      </div>
    </div>

    <div class="svcs">
      <article class="svc svc--wide reveal" id="aquatic-weed-harvesting">
        <span class="svc__num">01</span>
        <figure class="svc__media">
          <img src="<?php echo awh_img( 'crew-full-operation.webp' ); ?>" width="1280" height="960" loading="lazy" decoding="async"
            alt="The work boat, excavator and haul truck running as one operation on the bank.">
        </figure>
        <div class="svc__main">
          <h3 class="svc__title">Aquatic Weed Harvesting</h3>
          <p class="svc__text">Restore clear, open water in as little as one afternoon. We handle the entire job: cutting weeds at the root crown, skimming floating fragments, and hauling all biomass off-site so your waterfront remains clean, usable, and free of decaying buildup.</p>
          <ul class="svc__list">
            <li>Cuts to a depth of 5 feet</li>
            <li>Collects the cuttings as it cuts</li>
            <li>Off-site disposal included</li>
          </ul>
          <a class="svc__link" href="<?php echo esc_url( home_url( '/aquatic-weed-harvesting/' ) ); ?>">Aquatic weed harvesting details <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
        </div>
      </article>

      <article class="svc reveal" id="lake-weed-removal">
        <figure class="svc__media">
          <img src="<?php echo awh_img( 'lake-ramp-weed.webp' ); ?>" width="1024" height="498" loading="lazy" decoding="async"
            alt="A lake covered bank to bank in weed, seen from the launch ramp.">
        </figure>
        <span class="svc__num">02</span>
        <h3 class="svc__title">Lake Weed Removal</h3>
        <p class="svc__text">Reopen swim areas, boat lanes, dock approaches, coves, and other high-use areas affected by dense aquatic vegetation without treating the water with herbicides.</p>
        <ul class="svc__list">
          <li>Open channels and swim areas</li>
          <li>Works around docks and moorings</li>
        </ul>
        <a class="svc__link" href="<?php echo esc_url( home_url( '/lake-weed-removal/' ) ); ?>">Lake weed removal details <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      </article>

      <article class="svc reveal" id="pond-weed-removal">
        <figure class="svc__media">
          <img src="<?php echo awh_img( 'pond-estate-weed.jpg' ); ?>" width="1024" height="768" loading="lazy" decoding="async"
            alt="A private estate pond under a full mat of duckweed and algae.">
        </figure>
        <span class="svc__num">03</span>
        <h3 class="svc__title">Pond Weed Removal</h3>
        <p class="svc__text">Targeted removal of lily pads, cattails, algae mats, and other unwanted pond growth from private, farm, community, and association ponds using equipment designed for shallow water.</p>
        <ul class="svc__list">
          <li>Shallow draft, no ramp required</li>
          <li>Lily pads, cattails, algae mats</li>
        </ul>
        <a class="svc__link" href="<?php echo esc_url( home_url( '/pond-weed-removal/' ) ); ?>">Pond weed removal details <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      </article>

      <article class="svc reveal" id="shoreline-weed-removal">
        <figure class="svc__media">
          <img src="<?php echo awh_img( 'harvester-shoreline.webp' ); ?>" width="1024" height="768" loading="lazy" decoding="async"
            alt="Cut vegetation lifted out at the waterline onto the bank.">
        </figure>
        <span class="svc__num">04</span>
        <h3 class="svc__title">Shoreline Weed Removal</h3>
        <p class="svc__text">Remove cattails, phragmites, and overgrowth from the water's edge to reduce the need to work from unstable or difficult banks.</p>
        <ul class="svc__list">
          <li>Cut and root-ball removal</li>
          <li>Brush cut from the water side</li>
        </ul>
        <a class="svc__link" href="<?php echo esc_url( home_url( '/shoreline-weed-removal/' ) ); ?>">Shoreline weed removal details <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      </article>

      <article class="svc reveal" id="muck-reduction">
        <figure class="svc__media">
          <img src="<?php echo awh_img( 'conveyor-load.jpg' ); ?>" width="2048" height="1536" loading="lazy" decoding="async"
            alt="A full load of decomposing weed on the boat's conveyor, on its way off the water.">
        </figure>
        <span class="svc__num">05</span>
        <h3 class="svc__title">Muck Reduction Support</h3>
        <p class="svc__text">Remove excess vegetation before it dies and settles to help reduce the amount of organic material contributing to bottom buildup.</p>
        <ul class="svc__list">
          <li>Removes the nutrient load, not just the weed</li>
          <li>Firmer bottom season over season</li>
        </ul>
        <a class="svc__link" href="<?php echo esc_url( home_url( '/muck-removal/' ) ); ?>">Muck removal details <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      </article>

      <article class="svc reveal" id="leaf-debris-removal">
        <figure class="svc__media">
          <img src="<?php echo awh_img( 'lakeside-crew.webp' ); ?>" width="1024" height="540" loading="lazy" decoding="async"
            alt="Material lifted out of the lake and piled on the concrete ramp, ready to be hauled away.">
        </figure>
        <span class="svc__num">06</span>
        <h3 class="svc__title">Leaf and Debris Removal</h3>
        <p class="svc__text">Clear floating leaves, branches, logs, and seasonal debris before they sink, decompose, or obstruct access.</p>
        <ul class="svc__list">
          <li>Surface skimming and log removal</li>
          <li>Spring and fall clean-ups</li>
        </ul>
        <a class="svc__link" href="<?php echo esc_url( home_url( '/leaf-debris-removal/' ) ); ?>">Leaf &amp; debris removal details <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      </article>

      <article class="svc reveal" id="invasive-weed-removal">
        <figure class="svc__media">
          <img src="<?php echo awh_img( 'weed-chestnut.jpg' ); ?>" width="1200" height="600" loading="lazy" decoding="async"
            alt="A water chestnut rosette floating on open water, its spiked seed visible at the edge.">
        </figure>
        <span class="svc__num">07</span>
        <h3 class="svc__title">Invasive Aquatic Weed Removal</h3>
        <p class="svc__text">Target milfoil, water chestnut, hydrilla, and other invasive species using removal schedules aligned with their seasonal growth cycles.</p>
        <ul class="svc__list">
          <li>Timed to each species' season</li>
          <li>Fragment and seed control</li>
        </ul>
        <a class="svc__link" href="<?php echo esc_url( home_url( '/invasive-weed-control/' ) ); ?>">Invasive weed control details <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      </article>
    </div>

    <!-- Specialized Equipment Section -->
    <div class="subhead reveal">
      <h2 class="subhead__h">Specialized Equipment for Shallow and Difficult Water</h2>
      <div class="subhead__body">
        <p class="subhead__p">Our compact work boat can operate around docks, moorings, narrow shorelines, and shallow areas. Interchangeable tools allow us to adapt the equipment to the vegetation, debris, and access conditions present.</p>
        <p class="subhead__p"><a class="offer__link" href="<?php echo esc_url( home_url( '/how-it-works/' ) ); ?>#equipment">See how the equipment works <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a></p>
      </div>
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
      <h2 class="cta__h">Ready to Restore Your Waterfront?</h2>
      <p class="cta__p">Don't let overgrown weeds, algae, or floating debris ruin your time on the water. Contact us today for a fast, hassle-free estimate for mechanical removal. Our team will review your property, assess your vegetation challenges, and provide a clear, customized plan to restore your shoreline, dock area, or swim lane so it is clean and usable again.</p>
    </div>
    <div class="cta__side reveal">
      <a class="cta__call btn--block" href="tel:+15184417742">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 3h3l2 5-2.5 1.5a11 11 0 005 5L15 12l5 2v3a2 2 0 01-2.2 2C11 18.4 5.6 13 5 6.2A2 2 0 016 3z"/></svg>
        <span><b>+1 (518) 441-7742</b></span>
      </a>
      <a class="btn btn--primary btn--lg btn--block" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request a Free Estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
    </div>
  </div>
</section>

</main>

<?php
get_footer();
