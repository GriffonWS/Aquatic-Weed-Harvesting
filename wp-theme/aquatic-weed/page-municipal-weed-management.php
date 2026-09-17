<?php
/**
 * Template Name: Municipal
 *
 * Renders for the Page with slug "municipal-weed-management"; awh_create_pages() creates it.
 * Content mirrors the approved static municipal-weed-management.html.
 *
 * @package aquatic-weed
 */

get_header();
?>

<main id="main">

<!-- ============ PAGE HERO ============ -->
<!-- Same photo-collage hero as the other Who we serve audience pages. -->
<section class="rhero on-dark">
  <div class="wrap rhero__grid">
    <div class="rhero__copy">
      <p class="phero__crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> <i>/</i> <a href="<?php echo esc_url( home_url( '/who-we-serve/' ) ); ?>">Who we serve</a> <i>/</i> <b>Municipal</b></p>
      <h1 class="rhero__title">Municipal and Community Lake Weed <em>Management</em></h1>
      <p class="rhero__lead">Targeted aquatic vegetation removal for public lakes, beaches, boat
      launches, parks, and shared waterfronts. We mechanically cut, collect, and remove unwanted
      growth while coordinating the work around public use and seasonal priorities.</p>

      <div class="rhero__cta">
        <a class="btn btn--primary btn--lg" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request a Municipal Assessment <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
        <a class="btn btn--ghost btn--lg" href="tel:+15184417742">Call (518) 441-7742</a>
      </div>

      <ul class="rhero__chips">
        <li class="rhero__chip"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>Clearly defined treatment areas</li>
        <li class="rhero__chip"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>Scheduling around public access</li>
        <li class="rhero__chip"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>Removal documentation available</li>
      </ul>
    </div>

    <div class="rhero__art reveal">
      <figure class="rhero__main">
        <img src="<?php echo awh_img( 'harvesters-sunset.jpg' ); ?>" width="1536" height="2048" loading="eager" decoding="async" fetchpriority="high"
          alt="Two work boats moored at a public lakeside dock at sunset.">
      </figure>
      <figure class="rhero__inset">
        <img src="<?php echo awh_img( 'crew-full-operation.webp' ); ?>" width="1280" height="960" loading="eager" decoding="async"
          alt="The work boat, excavator and haul truck running as one operation on a shared waterfront.">
      </figure>
      <span class="rhero__tag">Mechanical management for public waterways</span>
    </div>
  </div>
</section>

<!-- ============ PLANNED AROUND PUBLIC USE ============ -->
<section class="section" id="programs">
  <div class="wrap">
    <div class="section__head reveal">
      <p class="eyebrow">Public and community projects</p>
      <h2 class="h2">Planned around public and community use.</h2>
    </div>

    <div class="svcs">
      <article class="svc reveal">
        <figure class="svc__media">
          <img src="<?php echo awh_img( 'lake-ramp-weed.webp' ); ?>" width="1024" height="498" loading="lazy" decoding="async"
            alt="A public lake covered in weed, seen from the boat launch.">
        </figure>
        <h3 class="svc__title">Municipal lake weed management</h3>
        <p class="svc__text">Support town, village, park, and recreation departments managing excessive
        or invasive vegetation in public waterbodies. Treatment can focus on beaches, boat lanes,
        launches, shorelines, and other high-use areas.</p>
        <ul class="svc__list">
          <li>Public lakes and ponds</li>
          <li>Parks and recreation areas</li>
          <li>Seasonal vegetation management</li>
        </ul>
      </article>

      <article class="svc reveal">
        <figure class="svc__media">
          <img src="<?php echo awh_img( 'after-cleaning.webp' ); ?>" width="2048" height="1536" loading="lazy" decoding="async"
            alt="Open, cleared water after harvesting along a shallow shoreline.">
        </figure>
        <h3 class="svc__title">Public beach weed removal service</h3>
        <p class="svc__text">Dense aquatic growth can restrict swimming areas, affect shoreline access,
        and create a poor visitor experience. Our compact work boat targets vegetation in shallow,
        frequently used beach areas.</p>
        <ul class="svc__list">
          <li>Swimming and wading zones</li>
          <li>Beachfront shorelines</li>
          <li>Scheduling around public use</li>
        </ul>
      </article>

      <article class="svc reveal">
        <figure class="svc__media">
          <img src="<?php echo awh_img( 'boat-in-weeds.jpg' ); ?>" width="1400" height="876" loading="lazy" decoding="async"
            alt="The work boat clearing a weed-covered community lake with homes along the bank.">
        </figure>
        <h3 class="svc__title">Lake association weed harvesting</h3>
        <p class="svc__text">We help lake associations define shared priorities across community
        beaches, docks, coves, and navigation routes. Projects can be planned as one-time removal or
        recurring seasonal maintenance.</p>
        <ul class="svc__list">
          <li>Shared docks and swimming areas</li>
          <li>Boat lanes and community access points</li>
          <li>Association-wide treatment planning</li>
        </ul>
      </article>
    </div>
  </div>
</section>

<!-- ============ PROJECT PLANNING ============ -->
<section class="section section--rule" id="planning">
  <div class="wrap">
    <div class="section__head reveal">
      <p class="eyebrow">Project planning and coordination</p>
      <h2 class="h2">Tailored project scope for every waterbody.</h2>
      <p class="lead">Municipal and association projects may involve permits, budgets, public
      schedules, and several stakeholders. We review these requirements before defining the removal
      area and project schedule.</p>
    </div>

    <ul class="offers">
      <li class="spec reveal"><b>Assessment of affected areas</b></li>
      <li class="spec reveal"><b>Identification of target vegetation</b></li>
      <li class="spec reveal"><b>Priority treatment zones</b></li>
      <li class="spec reveal"><b>Equipment and property access</b></li>
      <li class="spec reveal"><b>Scheduling around events and peak use</b></li>
      <li class="spec reveal"><b>Biomass handling and removal</b></li>
      <li class="spec reveal"><b>Removed-volume documentation</b></li>
      <li class="spec reveal"><b>Coordination around required approvals</b></li>
    </ul>

    <p class="shero__kicker reveal" style="margin-top:clamp(28px,3.4vw,40px);max-width:70ch"><em>Note:</em>
    Mechanical harvesting manages existing vegetation but does not guarantee permanent eradication.
    Some water bodies may require ongoing seasonal maintenance depending on the species and growing
    conditions.</p>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="section section--cta on-dark">
  <div class="wrap cta">
    <div class="cta__copy reveal">
      <h2 class="cta__h">Discuss your waterbody.</h2>
      <p class="cta__p">Send us photos, maps, or basic project details. We will review the affected
      areas and recommend an appropriate mechanical harvesting plan.</p>
    </div>
    <div class="cta__side reveal">
      <a class="cta__call" href="tel:+15184417742">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 3h3l2 5-2.5 1.5a11 11 0 005 5L15 12l5 2v3a2 2 0 01-2.2 2C11 18.4 5.6 13 5 6.2A2 2 0 016 3z"/></svg>
        <span><b>Call (518) 441-7742</b></span>
      </a>
      <a class="btn btn--primary btn--lg btn--block" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request a Municipal Assessment <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
    </div>
  </div>
</section>

</main>

<?php
get_footer();
