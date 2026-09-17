<?php
/**
 * Template Name: Residential
 *
 * Renders for the Page with slug "residential-weed-removal"; awh_create_pages() creates it.
 * Content mirrors the approved static residential-weed-removal.html.
 *
 * @package aquatic-weed
 */

get_header();
?>

<main id="main">

<!-- ============ PAGE HERO ============ -->
<!-- Photo collage: copy left, a tall main photo right with a second photo
     overlapping its corner. Not the home page hero, the flat .phero on the
     hub pages, or the .shero split panel on the service pages. -->
<section class="rhero on-dark">
  <div class="wrap rhero__grid">
    <div class="rhero__copy">
      <p class="phero__crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> <i>/</i> <a href="<?php echo esc_url( home_url( '/who-we-serve/' ) ); ?>">Who we serve</a> <i>/</i> <b>Residential</b></p>
      <h1 class="rhero__title">Reclaim the Water Around Your <em>Home</em></h1>
      <p class="rhero__lead">Remove unwanted aquatic vegetation and debris from private lakes, ponds,
      docks, swimming areas, and shorelines. We focus on the parts of your waterfront that affect
      access, recreation, and everyday enjoyment.</p>

      <div class="rhero__cta">
        <a class="btn btn--primary btn--lg" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request a Residential Estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
        <a class="btn btn--ghost btn--lg" href="tel:+15184417742">Call (518) 441-7742</a>
      </div>

      <ul class="rhero__chips">
        <li class="rhero__chip"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>Targeted removal in high-use areas</li>
        <li class="rhero__chip"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>Equipment designed for shallow water</li>
        <li class="rhero__chip"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>No herbicide application</li>
      </ul>
    </div>

    <div class="rhero__art reveal">
      <figure class="rhero__main">
        <img src="<?php echo awh_img( 'pond-estate-weed.jpg' ); ?>" width="1024" height="768" loading="eager" decoding="async" fetchpriority="high"
          alt="A private estate pond under a mat of surface growth, the house on the rise behind it.">
      </figure>
      <figure class="rhero__inset">
        <img src="<?php echo awh_img( 'boat-in-weeds.jpg' ); ?>" width="1400" height="876" loading="eager" decoding="async"
          alt="The work boat clearing a weed-covered pond with homes along the far bank.">
      </figure>
      <span class="rhero__tag">Mechanical care for private waterfronts</span>
    </div>
  </div>
</section>

<!-- ============ AREAS YOU USE MOST ============ -->
<section class="section" id="areas">
  <div class="wrap">
    <div class="section__head reveal">
      <p class="eyebrow">Residential services</p>
      <h2 class="h2">Focused on the areas you use most.</h2>
    </div>

    <div class="svcs">
      <article class="svc reveal">
        <figure class="svc__media">
          <img src="<?php echo awh_img( 'lake-ramp-weed.webp' ); ?>" width="1024" height="498" loading="lazy" decoding="async"
            alt="A lake covered bank to bank in weed, seen from the shoreline.">
        </figure>
        <h3 class="svc__title">Private lakefront weed control</h3>
        <p class="svc__text">Dense aquatic weeds can restrict swimming, fishing, boating, and shoreline
        access. We target excessive growth around private waterfronts while leaving unaffected areas
        undisturbed.</p>
        <ul class="svc__list">
          <li>Swimming and fishing areas</li>
          <li>Shorelines and shallow coves</li>
          <li>Private boat access points</li>
        </ul>
      </article>

      <article class="svc reveal">
        <figure class="svc__media">
          <img src="<?php echo awh_img( 'harvester-shoreline.webp' ); ?>" width="1024" height="768" loading="lazy" decoding="async"
            alt="Cut vegetation lifted out at the waterline onto the bank.">
        </figure>
        <h3 class="svc__title">Lake dock weed cleaning</h3>
        <p class="svc__text">Weeds and floating debris can collect around docks, ladders, boat lifts, and
        approaches. Our compact work boat operates around waterfront structures to clear frequently
        used areas.</p>
        <ul class="svc__list">
          <li>Docks and boat approaches</li>
          <li>Ladders and swimming access</li>
          <li>Floating vegetation and debris</li>
        </ul>
      </article>

      <article class="svc reveal">
        <figure class="svc__media">
          <img src="<?php echo awh_img( 'before-cleaning.jpg' ); ?>" width="1024" height="768" loading="lazy" decoding="async"
            alt="A backyard pond blanketed shore to shore in bright green algae.">
        </figure>
        <h3 class="svc__title">Residential pond cleaning service</h3>
        <p class="svc__text">Restore access and visibility in private, backyard, and farm ponds affected
        by weeds, lily pads, cattails, algae, leaves, or organic buildup.</p>
        <ul class="svc__list">
          <li>Shallow pond vegetation removal</li>
          <li>Floating algae and debris cleanup</li>
          <li>Shoreline and access-area clearing</li>
        </ul>
      </article>
    </div>
  </div>
</section>

<!-- ============ SHOW US WHAT IS GROWING ============ -->
<section class="section section--rule" id="send-photos">
  <div class="wrap">
    <div class="approach">
      <div class="approach__aside reveal">
        <p class="eyebrow">Get an accurate quote</p>
        <h2 class="h2">Show us what is growing.</h2>
        <p class="lead">To help us prepare an accurate recommendation and quote, send us photos of the
        affected water and shoreline. Our team will evaluate the vegetation density, depth, and access
        to determine the ideal mechanical strategy.</p>
        <p class="shero__kicker"><em>Note:</em> Mechanical harvesting provides immediate, chemical-free
        control of existing growth. Depending on plant species and environmental factors, seasonal
        maintenance plans may be recommended to sustain long-term clarity.</p>
      </div>

      <ul class="approach__list">
        <li class="approach__item reveal">
          <span class="approach__n">01</span>
          <div>
            <h3 class="approach__h">Clear photos</h3>
            <p class="approach__p">Overview shots of the affected water area and shoreline access point.</p>
          </div>
        </li>
        <li class="approach__item reveal">
          <span class="approach__n">02</span>
          <div>
            <h3 class="approach__h">Property location</h3>
            <p class="approach__p">Address or coordinates for logistical and equipment planning.</p>
          </div>
        </li>
        <li class="approach__item reveal">
          <span class="approach__n">03</span>
          <div>
            <h3 class="approach__h">Estimated size</h3>
            <p class="approach__p">Approximate square footage or shoreline length needing service.</p>
          </div>
        </li>
        <li class="approach__item reveal">
          <span class="approach__n">04</span>
          <div>
            <h3 class="approach__h">Specific challenges</h3>
            <p class="approach__p">Details on how growth impacts your dock, swimming, or boating activities.</p>
          </div>
        </li>
        <li class="approach__item reveal">
          <span class="approach__n">05</span>
          <div>
            <h3 class="approach__h">Access restrictions</h3>
            <p class="approach__p">Information on steep slopes, narrow gates, overhead lines, or shallow ramps.</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="section section--cta on-dark">
  <div class="wrap cta">
    <div class="cta__copy reveal">
      <h2 class="cta__h">Ready to reclaim your waterfront?</h2>
      <p class="cta__p">Get started today with a complimentary consultation and estimate for your
      lakefront, dock, or residential pond.</p>
    </div>
    <div class="cta__side reveal">
      <a class="cta__call" href="tel:+15184417742">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 3h3l2 5-2.5 1.5a11 11 0 005 5L15 12l5 2v3a2 2 0 01-2.2 2C11 18.4 5.6 13 5 6.2A2 2 0 016 3z"/></svg>
        <span><b>Call (518) 441-7742</b></span>
      </a>
      <a class="btn btn--primary btn--lg btn--block" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request a Residential Estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
    </div>
  </div>
</section>

</main>

<?php
get_footer();
