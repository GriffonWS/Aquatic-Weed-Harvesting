<?php
/**
 * Template Name: Shoreline Weed Removal
 *
 * Renders for the Page with slug "shoreline-weed-removal"; awh_create_pages() creates it.
 * Content mirrors the approved static shoreline-weed-removal.html.
 *
 * @package aquatic-weed
 */

get_header();
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Do you offer a cattail removal service?",
      "acceptedAnswer": { "@type": "Answer", "text": "The root-rake attachment can remove heavy cattail growth where water depth, access, and shoreline conditions allow." }
    },
    {
      "@type": "Question",
      "name": "Can you work around docks?",
      "acceptedAnswer": { "@type": "Answer", "text": "The compact work boat is designed to navigate shallow and restricted waterfront areas, including areas around docks and other obstacles." }
    },
    {
      "@type": "Question",
      "name": "Will the shoreline vegetation return?",
      "acceptedAnswer": { "@type": "Answer", "text": "Some regrowth is normal. The rate of return depends on the species, water conditions, and seasonal growth cycle." }
    }
  ]
}
</script>

<main id="main">

<!-- ============ PAGE HERO ============ -->
<section class="shero on-dark">
  <figure class="shero__panel">
    <img src="<?php echo awh_img( 'harvester-shoreline.webp' ); ?>" width="1024" height="768" loading="eager" decoding="async" fetchpriority="high"
      alt="Cut vegetation lifted out at the waterline and set on the bank.">
  </figure>

  <div class="shero__inner">
    <p class="phero__crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> <i>/</i> <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a> <i>/</i> <b>Shoreline weed removal</b></p>
    <h1 class="shero__title">Clear Overgrown Shorelines From the <em>Water Side</em></h1>
    <p class="shero__lead">Clear cattails, lily pads, submerged weeds, and overhanging branches from
    hard-to-reach shorelines. Our specialized work boat approaches the shoreline from the water,
    reducing the need to operate heavy equipment on soft or unstable banks.</p>

    <div class="shero__cta">
      <a class="btn btn--primary btn--lg" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request a Free Estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      <a class="btn btn--ghost btn--lg" href="tel:+15184417742">Call (518) 441-7742</a>
    </div>

    <ul class="shero__specs">
      <li class="shero__spec"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>Mechanical vegetation removal</li>
      <li class="shero__spec"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>Designed for shallow shoreline areas</li>
      <li class="shero__spec"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>No herbicide application</li>
    </ul>
  </div>
</section>

<!-- ============ RECLAIM ACCESS ============ -->
<section class="section" id="access">
  <div class="wrap">
    <div class="section__head reveal">
      <p class="eyebrow">Why it matters</p>
      <h2 class="h2">Reclaim access to your shoreline.</h2>
      <p class="lead">Heavy vegetation can block waterfront views, restrict access, crowd docks, and
      make shoreline maintenance difficult. Soft banks and shallow water can also prevent
      conventional land-based or full-size harvesting equipment from reaching the problem.</p>
      <p class="lead">Our compact work boat uses specialized attachments to cut, lift, and collect
      unwanted vegetation while operating from the water.</p>
    </div>
  </div>
</section>

<!-- ============ TARGETED GROWTH ============ -->
<section class="section section--rule" id="growth">
  <div class="wrap">
    <div class="section__head reveal">
      <p class="eyebrow">What we clear</p>
      <h2 class="h2">Targeted shoreline growth and debris.</h2>
    </div>

    <div class="wfront wfront--5">
      <article class="wfrontCard reveal">
        <img src="<?php echo awh_img( 'weed-cattail.jpg' ); ?>" width="1200" height="600" loading="lazy" decoding="async"
             alt="A dense cattail stand along a soft shoreline edge.">
        <div class="wfrontCard__body">
          <h3 class="wfrontCard__h">Cattails</h3>
          <p class="wfrontCard__p">The root-rake attachment lifts heavy cattail growth from shallow
          water where site conditions allow.</p>
        </div>
      </article>

      <article class="wfrontCard reveal">
        <img src="<?php echo awh_img( 'weed-lily.jpg' ); ?>" width="1200" height="600" loading="lazy" decoding="async"
             alt="Lily pads covering the surface of shallow water near the bank.">
        <div class="wfrontCard__body">
          <h3 class="wfrontCard__h">Lily pads</h3>
          <p class="wfrontCard__p">Remove excessive lily pad growth affecting shoreline access,
          docks, and open-water areas.</p>
        </div>
      </article>

      <article class="wfrontCard reveal">
        <img src="<?php echo awh_img( 'weed-milfoil.jpg' ); ?>" width="1200" height="600" loading="lazy" decoding="async"
             alt="Eurasian watermilfoil in a dense underwater stand, tips breaking the surface.">
        <div class="wfrontCard__body">
          <h3 class="wfrontCard__h">Aquatic weeds</h3>
          <p class="wfrontCard__p">Cut and collect submerged or emergent vegetation growing close to
          the shoreline.</p>
        </div>
      </article>

      <article class="wfrontCard reveal">
        <img src="<?php echo awh_img( 'weed-algae.jpg' ); ?>" width="1200" height="600" loading="lazy" decoding="async"
             alt="A mat of filamentous algae gathering along the waterline.">
        <div class="wfrontCard__body">
          <h3 class="wfrontCard__h">Floating vegetation</h3>
          <p class="wfrontCard__p">Use the skimmer attachment to collect algae, duckweed, and other
          fine material gathering along the waterline.</p>
        </div>
      </article>

      <article class="wfrontCard reveal">
        <img src="<?php echo awh_img( 'lakeside-crew.webp' ); ?>" width="1024" height="540" loading="lazy" decoding="async"
             alt="Material lifted out of the water and piled on the ramp, ready to be hauled away.">
        <div class="wfrontCard__body">
          <h3 class="wfrontCard__h">Branches and small trees</h3>
          <p class="wfrontCard__p">Cut low-hanging branches, small trees, and downed wood from the
          water using a hydraulic pole saw.</p>
        </div>
      </article>
    </div>

    <p class="serve__note reveal">Not sure what is growing? Send us a clear photo of the shoreline
    for an initial review.
    <a class="offer__link" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Send us a photo <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a></p>
  </div>
</section>

<!-- ============ EQUIPMENT ============ -->
<section class="section" id="equipment">
  <div class="wrap">
    <div class="section__head reveal">
      <p class="eyebrow">The equipment</p>
      <h2 class="h2">Specialized equipment for difficult shorelines.</h2>
      <p class="lead">Shoreline projects often involve more than one type of vegetation.
      Interchangeable attachments allow the work boat to adapt without bringing several separate
      machines to the property.</p>
    </div>

    <div class="kit">
      <figure class="kit__media reveal">
        <img src="<?php echo awh_img( 'machine.png' ); ?>" width="768" height="432" loading="lazy" decoding="async"
             alt="A quick-change attachment mounted on the work boat, operator at the controls.">
      </figure>

      <ul class="kit__list">
        <li class="kit__row reveal">
          <span class="kit__tag">01</span>
          <div>
            <h3 class="kit__h">Root rake</h3>
            <p class="kit__p">Lifts cattails and heavier rooted vegetation from shallow shoreline
            areas.</p>
          </div>
        </li>
        <li class="kit__row reveal">
          <span class="kit__tag">02</span>
          <div>
            <h3 class="kit__h">Underwater cutter</h3>
            <p class="kit__p">Cuts submerged and emergent aquatic vegetation affecting waterfront
            access.</p>
          </div>
        </li>
        <li class="kit__row reveal">
          <span class="kit__tag">03</span>
          <div>
            <h3 class="kit__h">Skimmer attachment</h3>
            <p class="kit__p">Collects floating vegetation, algae, leaves, and fine surface
            material.</p>
          </div>
        </li>
        <li class="kit__row reveal">
          <span class="kit__tag">04</span>
          <div>
            <h3 class="kit__h">Hydraulic pole saw</h3>
            <p class="kit__p">Cuts obstructing branches, small trees, and downed logs while working
            from the water.</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ PROCESS ============ -->
<!-- Dark band: sets the four steps apart as a sequence, and gives the
     .wavetop on the section below something to wave out of. -->
<section class="section section--band on-dark" id="process">
  <div class="wrap">
    <div class="section__head reveal">
      <p class="eyebrow">The process</p>
      <h2 class="h2">How shoreline weed removal works.</h2>
    </div>

    <ol class="flow flow--4">
      <li class="flow__step reveal">
        <figure class="flow__media">
          <img src="<?php echo awh_img( 'lake-ramp-weed.webp' ); ?>" width="1024" height="498" loading="lazy" decoding="async"
               alt="A weed-choked waterline seen from the launch ramp, before any work begins.">
        </figure>
        <div class="flow__bar"><span class="flow__n">1</span><span class="flow__rule"></span></div>
        <h3 class="flow__h">Show us the shoreline</h3>
        <p class="flow__p">Send photos showing the vegetation, affected area, water depth, nearby
        docks, and available property access.</p>
      </li>

      <li class="flow__step reveal">
        <figure class="flow__media">
          <img src="<?php echo awh_img( 'weedoo-work-boat-poster.jpg' ); ?>" width="1400" height="786" loading="lazy" decoding="async"
               alt="The shallow-draft work boat staged at the water's edge with its attachment fitted.">
        </figure>
        <div class="flow__bar"><span class="flow__n">2</span><span class="flow__rule"></span></div>
        <h3 class="flow__h">Review the conditions</h3>
        <p class="flow__p">We identify the likely vegetation and determine which equipment is
        suitable for the shoreline.</p>
      </li>

      <li class="flow__step reveal">
        <figure class="flow__media">
          <img src="<?php echo awh_img( 'boat-in-weeds.jpg' ); ?>" width="1400" height="876" loading="lazy" decoding="async"
               alt="The work boat cutting a path through a weed mat toward the bank.">
        </figure>
        <div class="flow__bar"><span class="flow__n">3</span><span class="flow__rule"></span></div>
        <h3 class="flow__h">Define the priority areas</h3>
        <p class="flow__p">The work can focus on docks, views, access points, fishing areas, or
        other sections that need attention.</p>
      </li>

      <li class="flow__step reveal">
        <figure class="flow__media">
          <img src="<?php echo awh_img( 'conveyor-load.jpg' ); ?>" width="2048" height="1536" loading="lazy" decoding="async"
               alt="A full load of cut vegetation riding the boat's conveyor on its way off the water.">
        </figure>
        <div class="flow__bar"><span class="flow__n">4</span><span class="flow__rule"></span></div>
        <h3 class="flow__h">Remove the growth</h3>
        <p class="flow__p">We mechanically cut, lift, or collect the unwanted vegetation and remove
        the collected material from the water.</p>
      </li>
    </ol>
  </div>
</section>

<!-- ============ REACH AREAS LAND EQUIPMENT CANNOT ============ -->
<section class="section section--wavetop" id="reach">
  <svg class="wavetop" viewBox="0 0 1440 130" preserveAspectRatio="none" aria-hidden="true">
    <path class="w1" d="M0 60c180 40 320-30 520-10s300 60 480 30 260-40 440-20v70H0z"/>
    <path class="w2" d="M0 80c200 30 340-20 540 5s320 50 500 20 220-30 400-15v55H0z"/>
  </svg>
  <div class="wrap">
    <div class="approach">
      <div class="approach__aside reveal">
        <p class="eyebrow">Working from the water</p>
        <h2 class="h2">Reach areas land equipment cannot.</h2>
        <p class="lead">Land-based equipment may damage soft banks or struggle to reach vegetation
        growing beyond the waterline. Working from a compact boat provides direct access to shallow
        growth, submerged plants, and shoreline obstacles.</p>
      </div>

      <ul class="approach__list">
        <li class="approach__item reveal">
          <span class="approach__n">01</span>
          <div><h3 class="approach__h">Reduced reliance on soft banks</h3></div>
        </li>
        <li class="approach__item reveal">
          <span class="approach__n">02</span>
          <div><h3 class="approach__h">Better access around docks and waterfront structures</h3></div>
        </li>
        <li class="approach__item reveal">
          <span class="approach__n">03</span>
          <div><h3 class="approach__h">Targeted removal in selected areas</h3></div>
        </li>
        <li class="approach__item reveal">
          <span class="approach__n">04</span>
          <div><h3 class="approach__h">Multiple tools available from one boat</h3></div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ WHO WE HELP ============ -->
<section class="section section--rule" id="who">
  <div class="wrap">
    <div class="section__head reveal">
      <p class="eyebrow">Who we help</p>
      <h2 class="h2">Shoreline removal for different waterfronts.</h2>
    </div>

    <ul class="offers offers--3">
      <li class="spec reveal"><b>Private lake and pond properties</b></li>
      <li class="spec reveal"><b>Residential docks and swim areas</b></li>
      <li class="spec reveal"><b>Campgrounds and resorts</b></li>
      <li class="spec reveal"><b>Marinas and shared waterfronts</b></li>
      <li class="spec reveal"><b>Lake and homeowner associations</b></li>
      <li class="spec reveal"><b>Parks and public access areas</b></li>
    </ul>
  </div>
</section>

<!-- ============ FAQ ============ -->
<section class="section" id="faq">
  <div class="wrap">
    <div class="section__head reveal">
      <p class="eyebrow">Questions</p>
      <h2 class="h2">Shoreline weed removal questions.</h2>
    </div>

    <div class="faq">
      <details class="faq__item reveal">
        <summary class="faq__q">Do you offer a cattail removal service?
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
        </summary>
        <p class="faq__a">The root-rake attachment can remove heavy cattail growth where water
        depth, access, and shoreline conditions allow.</p>
      </details>

      <details class="faq__item reveal">
        <summary class="faq__q">Can you work around docks?
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
        </summary>
        <p class="faq__a">The compact work boat is designed to navigate shallow and restricted
        waterfront areas, including areas around docks and other obstacles.</p>
      </details>

      <details class="faq__item reveal">
        <summary class="faq__q">Will the shoreline vegetation return?
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
        </summary>
        <p class="faq__a">Some regrowth is normal. The rate of return depends on the species, water
        conditions, and seasonal growth cycle.</p>
      </details>
    </div>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="section section--cta on-dark">
  <div class="wrap cta">
    <div class="cta__copy reveal">
      <p class="eyebrow">Free initial review</p>
      <h2 class="cta__h">Show us your shoreline.</h2>
      <p class="cta__p">Send us photos of the overgrown area. We will review the vegetation, access
      conditions, and project scope before recommending the appropriate removal approach.</p>
    </div>
    <div class="cta__side reveal">
      <a class="cta__call" href="tel:+15184417742">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 3h3l2 5-2.5 1.5a11 11 0 005 5L15 12l5 2v3a2 2 0 01-2.2 2C11 18.4 5.6 13 5 6.2A2 2 0 016 3z"/></svg>
        <span><b>+1 (518) 441-7742</b><em>jim@wedowaterweeds.com</em></span>
      </a>
      <a class="btn btn--primary btn--lg btn--block" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request a Free Estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      <a class="btn btn--ghost btn--lg btn--block" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Send Us a Photo</a>
    </div>
  </div>
</section>

</main>

<?php
get_footer();
