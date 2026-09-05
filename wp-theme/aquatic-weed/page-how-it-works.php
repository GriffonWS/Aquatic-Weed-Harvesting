<?php
/**
 * Template Name: How it works
 *
 * Renders for the Page with slug "how-it-works"; awh_create_pages() creates it.
 *
 * @package aquatic-weed
 */

get_header();
?>

<main id="main">

<!-- ============ PAGE HERO ============ -->
<section class="phero on-dark">
  <div class="wrap phero__inner">
    <p class="phero__crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> <i>/</i> <b>How it works</b></p>
    <h1 class="phero__title">Three steps,<br>start to <em>finish</em>.</h1>
    <p class="phero__lead">Send a photo or we come out and look. The work boat launches from your shoreline, cuts and collects, and the biomass leaves with us — most residential frontages are a one- or two-day job. Below: the three steps, the boat, and the four attachments it carries.</p>
    <div class="phero__cta">
      <a class="btn btn--primary btn--lg" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request an estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      <a class="btn btn--ghost btn--lg" href="tel:+15184417742">(518) 441-7742</a>
    </div>
  </div>
</section>

<!-- ============ PROCESS ============ -->
<section class="section section--wavetop" id="process">
  <svg class="wavetop" viewBox="0 0 1440 130" preserveAspectRatio="none" aria-hidden="true">
    <path class="w1" d="M0 60c180 40 320-30 520-10s300 60 480 30 260-40 440-20v70H0z"/>
    <path class="w2" d="M0 80c200 30 340-20 540 5s320 50 500 20 220-30 400-15v55H0z"/>
  </svg>
  <div class="wrap">
    <ol class="steps">
      <li class="step reveal">
        <div class="step__num">1</div>
        <div class="step__body">
          <h3>We look at the water</h3>
          <p>Send photos and a rough idea of the area, or we come out. We identify what's actually
          growing — the plan for water chestnut is not the plan for lily pads — and give you a flat quote.</p>
        </div>
        <figure class="shot shot--step">
          <img src="<?php echo awh_img( 'lake-ramp-weed.webp' ); ?>" width="1024" height="498" loading="lazy" decoding="async"
               alt="A weed-choked lake seen from the public boat ramp, before any work begins.">
        </figure>
      </li>
      <li class="step reveal">
        <div class="step__num">2</div>
        <div class="step__body">
          <h3>We harvest</h3>
          <p>The work boat launches from your shoreline or the nearest access. It cuts, collects, and shuttles
          full baskets to a staging point on shore. Most residential frontages are a one- or two-day job.</p>
        </div>
        <figure class="shot shot--step">
          <img src="<?php echo awh_img( 'harvester-shoreline.webp' ); ?>" width="1024" height="768" loading="lazy" decoding="async"
               alt="The work boat delivering cut vegetation to an excavator waiting at the shoreline.">
        </figure>
      </li>
      <li class="step reveal">
        <div class="step__num">3</div>
        <div class="step__body">
          <h3>It leaves with us</h3>
          <p>Biomass is loaded out and hauled away — not piled at your treeline. You get open water,
          a clean shoreline, and no nutrient load going back into the lake.</p>
        </div>
        <figure class="shot shot--step">
          <img src="<?php echo awh_img( 'loading-dump-truck.webp' ); ?>" width="1280" height="960" loading="lazy" decoding="async"
               alt="An excavator loading harvested weed into a dump truck to be hauled off site.">
        </figure>
      </li>
    </ol>
  </div>
</section>

<!-- ============ THE BOAT ============ -->
<section class="section section--boat on-dark" id="boat">
  <div class="wrap boat">
    <div class="boat__copy reveal">
      <p class="eyebrow">The equipment</p>
      <h2 class="h2">Small boat,<br>shallow water.</h2>
      <p class="lead">Full-size harvesters need depth, open water and a launch ramp. Most weed problems
      are the exact opposite — a shallow, weedy, wind-blown corner of a lake with a private dock in the
      way. Our work boat is built for that corner.</p>
      <ul class="boat__specs">
        <li class="spec"><b>Shallow draft</b><span>Works where harvesters run aground</span></li>
        <li class="spec"><b>Holds position</b><span>Stable in wind and chop</span></li>
        <li class="spec"><b>Quick-change tools</b><span>Cutter, bucket, skimmer, saw</span></li>
        <li class="spec"><b>Trailerable</b><span>No public ramp required</span></li>
      </ul>
    </div>
    <div class="boat__figure reveal">
      <figure class="shot shot--feature">
        <img src="<?php echo awh_img( 'boat-in-weeds.jpg' ); ?>" width="1400" height="876" loading="lazy" decoding="async"
             alt="The work boat cutting a channel through a pond blanketed in aquatic weed.">
      </figure>
      <div class="boat__badge">
        <b>No<br>chemicals</b>
        <svg viewBox="0 0 100 100" aria-hidden="true"><path id="circ" d="M50 50m-43 0a43 43 0 1086 0a43 43 0 10-86 0" fill="none"/><text><textPath href="#circ">mechanical harvesting · eco-conscious · </textPath></text></svg>
      </div>
    </div>
  </div>
</section>

<!-- ============ EQUIPMENT ============ -->
<!-- The tool detail the Services page only summarises: same boat, four
     quick-change attachments, and which one a job calls for. Text-only by
     design until the McNamees send photos of their own machine — the
     .svc__media slots and their styling are retained for that. -->
<section class="section section--wavetop" id="equipment">
  <svg class="wavetop" viewBox="0 0 1440 130" preserveAspectRatio="none" aria-hidden="true">
    <path class="w1" d="M0 60c180 40 320-30 520-10s300 60 480 30 260-40 440-20v70H0z"/>
    <path class="w2" d="M0 80c200 30 340-20 540 5s320 50 500 20 220-30 400-15v55H0z"/>
  </svg>
  <div class="wrap">
    <div class="section__head reveal">
      <p class="eyebrow">The equipment process</p>
      <h2 class="h2">Four attachments,<br>changed on the water.</h2>
      <p class="lead">Most jobs need more than one. The tools swap over in minutes at the shoreline,
      so a morning of cutting can turn into an afternoon of pulling root balls without a second
      mobilisation — and without a second bill.</p>
    </div>

        <figure class="shot shot--band reveal">
      <img src="<?php echo awh_img( 'conveyor-load.jpg' ); ?>" width="2048" height="1536" loading="lazy" decoding="async"
           alt="The boat's conveyor lifting a full mat of cut weed clear of the lake surface.">
    </figure>

    <div class="svcs svcs--text">
      <article class="svc svc--wide reveal">
        <span class="svc__num">01</span>
        <div class="svc__main">
          <h3 class="svc__title">Cutter</h3>
          <p class="svc__text">The one that does most of the work. The cutter shears vegetation at the
          root crown while the onboard basket collects it, so the cuttings never drift back into your
          cove or wash up on the next property. Ideal for milfoil, hydrilla and water chestnut mats.</p>
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
        <p class="svc__text">The front end loader. It scoops up the heavy, root-bound material a
        cutter can't take — the growth that comes straight back if you only cut the top.</p>
        <ul class="svc__list">
          <li>Scoops to 3 foot depth</li>
          <li>Cattail root balls &amp; matted growth</li>
        </ul>
      </article>

      <article class="svc reveal">
        <span class="svc__num">03</span>
        <h3 class="svc__title">Skimmer bucket</h3>
        <p class="svc__text">For finer material and algae. It lifts floating growth off the top of the
        water before the wind puts it on your beach and it sinks to rot.</p>
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
