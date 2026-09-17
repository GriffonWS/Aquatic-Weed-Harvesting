<?php
/**
 * Template Name: Aquatic Weed Harvesting
 *
 * Renders for the Page with slug "aquatic-weed-harvesting"; awh_create_pages() creates it.
 * Content mirrors the approved static aquatic-weed-harvesting.html.
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
      "name": "How do I know which service I need?",
      "acceptedAnswer": { "@type": "Answer", "text": "Send us photos of the affected area. We will identify the likely vegetation and recommend the appropriate removal approach." }
    },
    {
      "@type": "Question",
      "name": "Is an estimate free?",
      "acceptedAnswer": { "@type": "Answer", "text": "Yes. Initial estimates are provided without charge or obligation." }
    },
    {
      "@type": "Question",
      "name": "Will the weeds grow back?",
      "acceptedAnswer": { "@type": "Answer", "text": "Mechanical aquatic weed harvesting is a maintenance service rather than permanent eradication. Regrowth varies by species, waterbody, and seasonal conditions." }
    },
    {
      "@type": "Question",
      "name": "Do you remove the cut vegetation?",
      "acceptedAnswer": { "@type": "Answer", "text": "Yes. Collected vegetation and debris are hauled away from the property." }
    },
    {
      "@type": "Question",
      "name": "When should I schedule service?",
      "acceptedAnswer": { "@type": "Answer", "text": "Timing depends on the species and project. Early scheduling is especially important for invasive plants that spread through seeds or fragments." }
    }
  ]
}
</script>

<main id="main">

<!-- ============ PAGE HERO ============ -->
<!-- Split panel: copy on flat colour to the left, photograph filling the whole
     right half of the viewport edge to edge. Not the home page's
     photo-behind-copy hero, and not the flat centred .phero used on
     services.html and the other top-level pages. -->
<section class="shero on-dark">
  <figure class="shero__panel">
    <img src="<?php echo awh_img( 'boat-in-weeds.jpg' ); ?>" width="1400" height="876" loading="eager" decoding="async" fetchpriority="high"
      alt="The yellow work boat cutting a path through a pond covered bank to bank in weed.">
  </figure>

  <div class="shero__inner">
    <p class="phero__crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> <i>/</i> <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a> <i>/</i> <b>Aquatic weed harvesting</b></p>
    <h1 class="shero__title">Mechanical Aquatic Weed <em>Harvesting</em> for Lakes, Ponds, and Shorelines</h1>
    <p class="shero__lead">Cut, collect, and remove unwanted aquatic vegetation without herbicide
    application. If you are looking for an aquatic weed harvester near me, our specialized workboat
    reaches shallow, overgrown, and hard-to-access areas across the Hudson Valley and surrounding
    areas of New York.</p>

    <div class="shero__cta">
      <a class="btn btn--primary btn--lg" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request a Free Estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      <a class="btn btn--ghost btn--lg" href="tel:+15184417742">Call (518) 441-7742</a>
    </div>

    <ul class="shero__specs">
      <li class="shero__spec"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>Vegetation collected during removal</li>
      <li class="shero__spec"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>Cuts up to 5 feet below the surface</li>
      <li class="shero__spec"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>Off-site hauling and disposal included</li>
    </ul>
  </div>
</section>

<!-- ============ ONE ADAPTABLE SYSTEM ============ -->
<!-- No .wavetop here: the hero ends on the hard edge of its spec bar, and a
     wave is positioned bottom:100% so it would cut up across that bar. -->
<section class="section" id="system">
  <div class="wrap">
    <div class="approach">
      <div class="approach__aside reveal">
        <p class="eyebrow">Built for difficult water</p>
        <h2 class="h2">One adaptable system for challenging waterfronts.</h2>
        <p class="lead">Every body of water presents different vegetation, depths, obstacles and
        access conditions. Our work boat uses interchangeable attachments, so the removal method can
        be matched to the conditions rather than forcing every project into the same process.</p>
      </div>

      <ul class="approach__list">
        <li class="approach__item reveal">
          <span class="approach__n">01</span>
          <div>
            <h3 class="approach__h">Shallow-water access</h3>
            <p class="approach__p">Work in areas where full-size harvesting equipment may not have
            sufficient depth or room.</p>
          </div>
        </li>
        <li class="approach__item reveal">
          <span class="approach__n">02</span>
          <div>
            <h3 class="approach__h">Targeted removal</h3>
            <p class="approach__p">Focus on the specific areas affecting swimming, boating,
            waterfront access, or property use.</p>
          </div>
        </li>
        <li class="approach__item reveal">
          <span class="approach__n">03</span>
          <div>
            <h3 class="approach__h">Complete collection</h3>
            <p class="approach__p">Capture removed vegetation during the project and transport it
            away from the property.</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ PROCESS ============ -->
<!-- Dark band: sets the three steps apart as a sequence, and gives the
     .wavetop on the equipment section below something to wave out of. -->
<section class="section section--band on-dark" id="process">
  <div class="wrap">
    <div class="section__head reveal">
      <p class="eyebrow">The process</p>
      <h2 class="h2">From assessment to removal.</h2>
    </div>

    <ol class="flow">
      <li class="flow__step reveal">
        <figure class="flow__media">
          <img src="<?php echo awh_img( 'lake-ramp-weed.webp' ); ?>" width="1024" height="498" loading="lazy" decoding="async"
               alt="A weed-choked lake seen from the launch ramp, before any work begins.">
        </figure>
        <div class="flow__bar"><span class="flow__n">1</span><span class="flow__rule"></span></div>
        <h3 class="flow__h">Show us the water</h3>
        <p class="flow__p">Send photos and basic information about the affected area. We identify
        the vegetation and determine whether mechanical removal is suitable.</p>
      </li>
      <li class="flow__step reveal">
        <figure class="flow__media">
          <img src="<?php echo awh_img( 'weedoo-work-boat-poster.jpg' ); ?>" width="1400" height="786" loading="lazy" decoding="async"
               alt="The shallow-draft work boat staged and ready with its interchangeable attachment.">
        </figure>
        <div class="flow__bar"><span class="flow__n">2</span><span class="flow__rule"></span></div>
        <h3 class="flow__h">Select the right equipment</h3>
        <p class="flow__p">We match the work boat attachment to the vegetation, debris, depth, and
        access conditions present on your water.</p>
      </li>
      <li class="flow__step reveal">
        <figure class="flow__media">
          <img src="<?php echo awh_img( 'loading-dump-truck.webp' ); ?>" width="1280" height="960" loading="lazy" decoding="async"
               alt="An excavator loading harvested weed into a dump truck to be hauled off site.">
        </figure>
        <div class="flow__bar"><span class="flow__n">3</span><span class="flow__rule"></span></div>
        <h3 class="flow__h">Cut, collect and haul away</h3>
        <p class="flow__p">The material is mechanically removed, collected during the project, and
        transported away from the property.</p>
      </li>
    </ol>

    <p class="reveal" style="margin-top:8px">
      <a class="offer__link" href="<?php echo esc_url( home_url( '/how-it-works/' ) ); ?>#process">See how the process works <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
    </p>
  </div>
</section>

<!-- ============ ONE BOAT, FOUR TOOLS ============ -->
<section class="section section--wavetop" id="equipment">
  <svg class="wavetop" viewBox="0 0 1440 130" preserveAspectRatio="none" aria-hidden="true">
    <path class="w1" d="M0 60c180 40 320-30 520-10s300 60 480 30 260-40 440-20v70H0z"/>
    <path class="w2" d="M0 80c200 30 340-20 540 5s320 50 500 20 220-30 400-15v55H0z"/>
  </svg>
  <div class="wrap">
    <div class="section__head reveal">
      <p class="eyebrow">The equipment</p>
      <h2 class="h2">One boat. Four specialized tools.</h2>
      <p class="lead">The same shallow-draft work boat handles every service. Interchangeable
      attachments allow the equipment to cut submerged vegetation, collect heavier growth, skim
      floating material, and remove branches or logs.
      <a class="offer__link" href="<?php echo esc_url( home_url( '/how-it-works/' ) ); ?>#equipment">Explore the equipment <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a></p>
    </div>

    <div class="kit">
      <figure class="kit__media reveal">
        <img src="<?php echo awh_img( 'machine.png' ); ?>" width="768" height="432" loading="lazy" decoding="async"
             alt="A quick-change cutter attachment mounted on the work boat, operator at the controls.">
      </figure>

      <ul class="kit__list">
        <li class="kit__row reveal">
          <span class="kit__tag">01</span>
          <div>
            <h3 class="kit__h">Cutter</h3>
            <p class="kit__p">Cuts aquatic vegetation up to 5 feet below the surface while
            collecting the cut material as it goes.</p>
          </div>
        </li>
        <li class="kit__row reveal">
          <span class="kit__tag">02</span>
          <div>
            <h3 class="kit__h">Vegetation bucket</h3>
            <p class="kit__p">Lifts heavier vegetation and root-bound material from shallow
            water.</p>
          </div>
        </li>
        <li class="kit__row reveal">
          <span class="kit__tag">03</span>
          <div>
            <h3 class="kit__h">Skimmer bucket</h3>
            <p class="kit__p">Collects algae mats, duckweed, leaves, and other floating
            material.</p>
          </div>
        </li>
        <li class="kit__row reveal">
          <span class="kit__tag">04</span>
          <div>
            <h3 class="kit__h">Hydraulic pole saw</h3>
            <p class="kit__p">Cuts branches, small trees, and downed wood from the water side.</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ EVERY WATERFRONT ============ -->
<!-- No .wavetop: the section above it is light too, so the wave (which is
     filled with the page colour) would have nothing to show against. -->
<section class="section section--serve" id="waterfronts">
  <div class="wrap">
    <div class="section__head reveal">
      <p class="eyebrow">Every waterfront</p>
      <h2 class="h2">Chemical-free removal for every type of waterfront.</h2>
    </div>

    <div class="wfront">
      <article class="wfrontCard reveal">
        <img src="<?php echo awh_img( 'pond-estate-weed.jpg' ); ?>" width="1024" height="768" loading="lazy" decoding="async"
             alt="A private estate pond with dense surface vegetation, house on the rise behind it.">
        <span class="wfrontCard__ico" aria-hidden="true">
          <svg viewBox="0 0 24 24"><path d="M3 11l9-7 9 7"/><path d="M5.5 9.6V20h13V9.6"/><path d="M9.5 20v-5h5v5"/></svg>
        </span>
        <div class="wfrontCard__body">
          <h3 class="wfrontCard__h">Residential</h3>
          <p class="wfrontCard__p">Private lakefronts, backyard ponds, swim areas, docks, and boat
          access points.</p>
        </div>
      </article>

      <article class="wfrontCard reveal">
        <img src="<?php echo awh_img( 'crew-full-operation.webp' ); ?>" width="1280" height="960" loading="lazy" decoding="async"
             alt="A full crew running a commercial job — work boat, excavator and haul truck on the bank.">
        <span class="wfrontCard__ico" aria-hidden="true">
          <svg viewBox="0 0 24 24"><path d="M3.5 9.5h17V20h-17z"/><path d="M2.5 9.5L5 4h14l2.5 5.5z"/><path d="M9.5 20v-6.5h5V20"/></svg>
        </span>
        <div class="wfrontCard__body">
          <h3 class="wfrontCard__h">Commercial</h3>
          <p class="wfrontCard__p">Campgrounds, marinas, golf courses, resorts, HOAs, and lake
          associations.</p>
        </div>
      </article>

      <article class="wfrontCard reveal">
        <img src="<?php echo awh_img( 'lakeside-crew.webp' ); ?>" width="1024" height="540" loading="lazy" decoding="async"
             alt="Harvested vegetation staged on a public lakeside access point for removal.">
        <span class="wfrontCard__ico" aria-hidden="true">
          <svg viewBox="0 0 24 24"><path d="M3 21h18"/><path d="M4 21V9h16v12"/><path d="M2.5 9L12 3.5 21.5 9"/><path d="M8 21v-7h3v7M14 14h2.5v7"/></svg>
        </span>
        <div class="wfrontCard__body">
          <h3 class="wfrontCard__h">Municipal</h3>
          <p class="wfrontCard__p">Public beaches, boat launches, parks, conservation districts,
          and community waterbodies.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ============ FAQ ============ -->
<section class="section" id="faq">
  <div class="wrap">
    <div class="section__head reveal">
      <p class="eyebrow">Questions</p>
      <h2 class="h2">Aquatic weed removal questions.</h2>
    </div>

    <div class="faq">
      <details class="faq__item reveal">
        <summary class="faq__q">How do I know which service I need?
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
        </summary>
        <p class="faq__a">Send us photos of the affected area. We will identify the likely
        vegetation and recommend the appropriate removal approach.</p>
      </details>

      <details class="faq__item reveal">
        <summary class="faq__q">Is an estimate free?
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
        </summary>
        <p class="faq__a">Yes. Initial estimates are provided without charge or obligation.</p>
      </details>

      <details class="faq__item reveal">
        <summary class="faq__q">Will the weeds grow back?
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
        </summary>
        <p class="faq__a">Mechanical aquatic weed harvesting is a maintenance service rather than
        permanent eradication. Regrowth varies by species, waterbody, and seasonal conditions.</p>
      </details>

      <details class="faq__item reveal">
        <summary class="faq__q">Do you remove the cut vegetation?
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
        </summary>
        <p class="faq__a">Yes. Collected vegetation and debris are hauled away from the property.</p>
      </details>

      <details class="faq__item reveal">
        <summary class="faq__q">When should I schedule service?
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
        </summary>
        <p class="faq__a">Timing depends on the species and project. Early scheduling is
        especially important for invasive plants that spread through seeds or fragments.</p>
      </details>
    </div>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="section section--cta on-dark">
  <div class="wrap cta">
    <div class="cta__copy reveal">
      <p class="eyebrow">Free estimate</p>
      <h2 class="cta__h">Send us a photo of your water.</h2>
      <p class="cta__p">We'll review what's growing, explain the recommended removal approach, and
      provide a no-obligation estimate.</p>
    </div>
    <div class="cta__side reveal">
      <a class="cta__call" href="tel:+15184417742">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 3h3l2 5-2.5 1.5a11 11 0 005 5L15 12l5 2v3a2 2 0 01-2.2 2C11 18.4 5.6 13 5 6.2A2 2 0 016 3z"/></svg>
        <span><b>+1 (518) 441-7742</b></span>
      </a>
      <a class="btn btn--primary btn--lg btn--block" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Get a Free Estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
    </div>
  </div>
</section>

</main>

<?php
get_footer();
