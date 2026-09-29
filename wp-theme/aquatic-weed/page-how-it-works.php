<?php
/**
 * Template Name: How it works
 *
 * Renders for the Page with slug "how-it-works"; awh_create_pages() creates it.
 * Content mirrors the approved static how-it-works.html.
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
        <p class="phero__crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> <i>/</i> <b>How it works</b></p>
        <h1 class="xhero__title">How Mechanical Aquatic Weed Removal <em>Works</em></h1>
        <p class="xhero__lead">Every project begins with identifying the vegetation, defining the priority areas, and selecting the right mechanical removal approach. Based in the Hudson Valley, Aquatic Weed Harvesting LLC serves lakes, ponds, and shorelines throughout New York, New Jersey, and Pennsylvania.</p>
        <p class="xhero__lead">Many residential waterfront projects can be completed in one or two working days, depending on vegetation density, treatment area, water depth, and property access.</p>
        <div class="xhero__cta">
          <a class="btn btn--primary btn--lg" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request an Estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
          <a class="btn btn--ghost btn--lg" href="tel:+15184417742">Call +1 (518) 441-7742</a>
        </div>
      </div>

      <figure class="xhero__media reveal">
        <video src="<?php echo awh_img( 'how-it-works-equipment.mp4' ); ?>" poster="<?php echo awh_img( 'how-it-works-equipment-poster.jpg' ); ?>"
          width="640" height="360" autoplay muted loop playsinline preload="auto"
          aria-label="The work boat operating in shallow water with its quick-change attachments."></video>
      </figure>
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
          <h3>Water Assessment and Weed Identification</h3>
          <p>Send photos of the affected water and an approximate area, or arrange an on-site visit. We
          identify what is growing, review the access conditions, and recommend the appropriate removal
          approach.</p>
          <p>Different plants require different methods, so a water chestnut project may not be handled
          the same way as lily pads or cattails. You receive a clear project scope and quote before work
          begins.</p>
        </div>
        <figure class="shot shot--step">
          <img src="<?php echo awh_img( 'lake-ramp-weed.webp' ); ?>" width="1024" height="498" loading="lazy" decoding="async"
               alt="A weed-choked lake seen from the public boat ramp, before any work begins.">
        </figure>
      </li>
      <li class="step reveal">
        <div class="step__num">2</div>
        <div class="step__body">
          <h3>Mechanical Cutting and Collection</h3>
          <p>The workboat launches from the shoreline or nearest suitable access point. It cuts or lifts
          the unwanted vegetation, collects the biomass, and transports each load to a designated
          shoreline staging area.</p>
          <p>Project timing depends on the treatment area, vegetation, water depth, and property
          access.</p>
        </div>
        <figure class="shot shot--step">
          <img src="<?php echo awh_img( 'harvester-shoreline.webp' ); ?>" width="1024" height="768" loading="lazy" decoding="async"
               alt="The work boat delivering cut vegetation to an excavator waiting at the shoreline.">
        </figure>
      </li>
      <li class="step reveal">
        <div class="step__num">3</div>
        <div class="step__body">
          <h3>Complete Vegetation Removal</h3>
          <p>The collected vegetation and biomass are removed from the water and hauled off the property.
          This leaves the treated area more open and prevents the removed plant material from being
          intentionally left in the lake or pond to decompose.</p>
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
  <div class="wrap">
  <div class="boat">
    <div class="boat__copy reveal">
      <p class="eyebrow">The equipment</p>
      <h2 class="h2">Specialized Equipment for Shallow and Difficult Water</h2>
      <p class="lead">Full-size harvesters require sufficient depth, open operating space, and suitable
      launch access. Many aquatic weed problems occur in shallow coves, around private docks, or along
      restricted shorelines.</p>
      <p class="lead">Our workboat is designed to reach shallow coves, private docks, and restricted
      shorelines. Five quick-change attachments allow the equipment to cut submerged weeds, scoop heavy
      vegetation, collect floating material, clear rooted shoreline growth, and manage woody debris.</p>
    </div>
    <div class="boat__figure reveal">
      <figure class="shot shot--feature">
        <img src="<?php echo awh_img( 'boat-in-weeds.jpg' ); ?>" width="1400" height="876" loading="lazy" decoding="async"
             alt="The work boat cutting a lane through a pond covered in dense weed.">
      </figure>
      <div class="boat__badge">
        <b>No<br>chemicals</b>
        <svg viewBox="0 0 100 100" aria-hidden="true"><path id="circ" d="M50 50m-43 0a43 43 0 1086 0a43 43 0 10-86 0" fill="none"/><text><textPath href="#circ">mechanical harvesting · eco-conscious · </textPath></text></svg>
      </div>
    </div>
  </div>
    <ul class="boat__specs boat__specs--wide reveal">
      <li class="spec"><b>Shallow Draft</b><span>Operates in areas that may be inaccessible to full-size harvesting equipment.</span></li>
      <li class="spec"><b>Stable Operation</b><span>Designed to maintain control in wind and normal surface movement.</span></li>
      <li class="spec"><b>Five Quick-Change Attachments</b><span>Switch between the cutter, vegetation bucket, skimmer bucket, root rake, and hydraulic pole saw according to the vegetation, debris, and site conditions.</span></li>
      <li class="spec"><b>Flexible Launch Access</b><span>Can use suitable private or shoreline access when a public launch is unavailable.</span></li>
      <li class="spec"><b>No Herbicide Application</b><span>Vegetation is managed through mechanical cutting, lifting, and collection.</span></li>
    </ul>
  </div>
</section>

<!-- ============ EQUIPMENT ============ -->
<section class="section" id="equipment">
  <div class="wrap">
    <div class="section__head reveal">
      <p class="eyebrow">The equipment process</p>
      <h2 class="h2">Five Attachments, Changed at the Shoreline</h2>
      <p class="lead">Some projects involve more than one type of vegetation or debris. The five
      attachments can be changed at the shoreline, allowing the workboat to move from cutting submerged
      weeds to lifting heavy growth, collecting floating material, or clearing shoreline debris during
      the same project.</p>
    </div>

        <figure class="shot shot--band reveal">
      <img src="<?php echo awh_img( 'harvesters-sunset.jpg' ); ?>" width="1536" height="2048" loading="lazy" decoding="async"
           style="object-position:50% 37%"
           alt="Two work boats moored at a lakeside dock at sunset, ready for the next job.">
    </figure>

    <div class="svcs svcs--text">
      <article class="svc svc--wide reveal">
        <span class="svc__num">01</span>
        <div class="svc__main">
          <h3 class="svc__title">Cutter</h3>
          <p class="svc__text">The cutter handles submerged aquatic vegetation such as Eurasian
          watermilfoil, hydrilla, and water chestnut. It cuts growth below the surface while collecting
          loose vegetation and fragments during harvesting.</p>
        </div>
        <ul class="svc__list">
          <li>Cuts vegetation up to 5 feet below the surface</li>
          <li>Collects cut material during harvesting</li>
          <li>Off-site hauling and disposal included</li>
        </ul>
      </article>

      <article class="svc reveal">
        <span class="svc__num">02</span>
        <h3 class="svc__title">Vegetation Bucket / Front-End Loader</h3>
        <p class="svc__text">The vegetation bucket lifts heavier growth that cannot be managed
        effectively with the cutter. It is used for cattails, root-bound vegetation, and dense plant
        material in shallow water.</p>
        <ul class="svc__list">
          <li>Scoops vegetation from depths up to 3 feet</li>
          <li>Handles heavy and matted plant material</li>
        </ul>
      </article>

      <article class="svc reveal">
        <span class="svc__num">03</span>
        <h3 class="svc__title">Skimmer Bucket</h3>
        <p class="svc__text">The skimmer bucket collects algae and other fine material floating on or
        just below the surface. It is useful in ponds, coves, and shoreline areas where wind naturally
        gathers debris.</p>
        <ul class="svc__list">
          <li>Collects algae and fine floating material</li>
          <li>Works at the surface and just below it</li>
        </ul>
      </article>

      <article class="svc reveal">
        <span class="svc__num">04</span>
        <h3 class="svc__title">Root Rake</h3>
        <p class="svc__text">The all-steel root rake uses 2-foot fingers to remove cattails and other
        emergent shoreline vegetation. It can also clear qualifying underwater rocks and debris.</p>
        <ul class="svc__list">
          <li>Uses 2-foot steel fingers</li>
          <li>Helps clear underwater rocks and debris</li>
        </ul>
      </article>

      <article class="svc svc--wide reveal">
        <span class="svc__num">05</span>
        <div class="svc__main">
          <h3 class="svc__title">Hydraulic Pole Saw</h3>
          <p class="svc__text">The hydraulic pole saw cuts tree branches, small trees, and downed logs in
          the water. Working from the water reduces the need for ladders or heavy equipment on soft
          shoreline banks.</p>
        </div>
        <ul class="svc__list">
          <li>Cuts branches and small trees</li>
          <li>Handles downed logs in the water</li>
        </ul>
      </article>
    </div>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="section section--cta on-dark">
  <div class="wrap cta">
    <div class="cta__copy reveal">
      <p class="eyebrow">Free Estimate</p>
      <h2 class="cta__h">Take the First Step Toward Clearer Water</h2>
      <p class="cta__p">Every waterbody presents a different combination of vegetation, depth, and
      access. Tell us what is affecting your lake, pond, or shoreline, and we will outline the
      equipment, removal method, and project scope best suited to the conditions.</p>
    </div>
    <div class="cta__side reveal">
      <a class="cta__call" href="tel:+15184417742">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 3h3l2 5-2.5 1.5a11 11 0 005 5L15 12l5 2v3a2 2 0 01-2.2 2C11 18.4 5.6 13 5 6.2A2 2 0 016 3z"/></svg>
        <span><b>Call +1 (518) 441-7742</b></span>
      </a>
      <a class="btn btn--primary btn--lg btn--block" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request a Free Estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
    </div>
  </div>
</section>

</main>

<?php
get_footer();
