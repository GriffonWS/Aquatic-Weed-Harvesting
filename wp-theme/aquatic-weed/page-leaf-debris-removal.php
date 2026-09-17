<?php
/**
 * Template Name: Leaf and Debris Removal
 *
 * Renders for the Page with slug "leaf-debris-removal"; awh_create_pages() creates it.
 * Content mirrors the approved static leaf-debris-removal.html.
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
      "name": "What types of debris can you remove?",
      "acceptedAnswer": { "@type": "Answer", "text": "The equipment can collect fallen leaves, loose plant material, floating organic debris, branches, small trees, and downed logs." }
    },
    {
      "@type": "Question",
      "name": "Can you remove debris from shallow water?",
      "acceptedAnswer": { "@type": "Answer", "text": "The compact work boat is designed to access shallow and confined areas where full-size equipment may have difficulty operating." }
    },
    {
      "@type": "Question",
      "name": "Can you remove storm-damaged branches?",
      "acceptedAnswer": { "@type": "Answer", "text": "A hydraulic pole saw and other attachments can manage qualifying branches, small trees, and downed wood in or near the water." }
    },
    {
      "@type": "Question",
      "name": "When is the best time for lake leaf removal?",
      "acceptedAnswer": { "@type": "Answer", "text": "Spring and fall are common cleanup periods. The best timing depends on tree coverage, weather, and how quickly leaves and debris accumulate." }
    },
    {
      "@type": "Question",
      "name": "Can this service be combined with weed removal?",
      "acceptedAnswer": { "@type": "Answer", "text": "Yes. Leaf and debris cleanup can be completed alongside aquatic vegetation, shoreline, or muck removal." }
    }
  ]
}
</script>

<main id="main">

<!-- ============ PAGE HERO ============ -->
<section class="shero on-dark">
  <figure class="shero__panel">
    <img src="<?php echo awh_img( 'lakeside-crew.webp' ); ?>" width="1024" height="540" loading="eager" decoding="async" fetchpriority="high"
      alt="Material lifted out of the water and piled on the concrete ramp, ready to be hauled away.">
  </figure>

  <div class="shero__inner">
    <p class="phero__crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> <i>/</i> <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a> <i>/</i> <b>Leaf &amp; debris removal</b></p>
    <h1 class="shero__title">Mechanical Leaf and <em>Debris Removal</em></h1>
    <p class="shero__lead">Leaves and debris often gather around docks, shorelines, coves, and other
    protected areas. If left in place, organic material can sink, decompose, and contribute to
    bottom buildup.</p>
    <p class="shero__lead">Our mechanical cleanup service removes floating material from the water
    before it becomes harder to reach. Different attachments let us collect fine surface debris and
    handle larger branches or downed wood.</p>

    <div class="shero__cta">
      <a class="btn btn--primary btn--lg" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request a Free Estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      <a class="btn btn--ghost btn--lg" href="tel:+15184417742">Call (518) 441-7742</a>
    </div>

    <ul class="shero__specs">
      <li class="shero__spec"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>Lake and pond surface cleanup</li>
      <li class="shero__spec"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>Light and heavy debris removal</li>
      <li class="shero__spec"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>Spring and fall service available</li>
    </ul>
  </div>
</section>

<!-- ============ SEASONAL ============ -->
<section class="section" id="seasonal">
  <div class="wrap">
    <div class="approach">
      <div class="approach__aside reveal">
        <p class="eyebrow">When to schedule</p>
        <h2 class="h2">Seasonal lake leaf removal service.</h2>
        <p class="lead">Wind and currents can push large amounts of fallen leaves into coves, dock
        areas, and shallow shorelines. These natural collection points may become difficult to clean
        from land.</p>
        <p class="lead">Our lake leaf removal service utilizes a specialized skimmer attachment to
        clear floating leaves and lighter organic debris from targeted areas. Recommended scheduling
        times include:</p>
      </div>

      <ul class="approach__list">
        <li class="approach__item reveal">
          <span class="approach__n">01</span>
          <div>
            <h3 class="approach__h">Spring cleanup</h3>
            <p class="approach__p">Remove leaves, branches, and organic material that accumulated
            over winter before the waterfront enters its busiest season.</p>
          </div>
        </li>
        <li class="approach__item reveal">
          <span class="approach__n">02</span>
          <div>
            <h3 class="approach__h">Fall cleanup</h3>
            <p class="approach__p">Collect fallen leaves and seasonal debris before they sink and
            contribute to additional bottom buildup.</p>
          </div>
        </li>
        <li class="approach__item reveal">
          <span class="approach__n">03</span>
          <div>
            <h3 class="approach__h">Post-storm cleanup</h3>
            <p class="approach__p">Remove branches, downed wood, and other natural debris after
            significant wind or storm activity.</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ WHAT WE COLLECT ============ -->
<!-- Text-only cards: there is no photography of leaf mats, branch cutting or
     storm debris in the library, so these carry no stand-in imagery. -->
<section class="section section--rule" id="debris">
  <div class="wrap">
    <div class="section__head reveal">
      <p class="eyebrow">What we collect</p>
      <h2 class="h2">Floating and submerged debris cleanup.</h2>
    </div>

    <div class="svcs svcs--text">
      <article class="svc svc--wide reveal">
        <span class="svc__num">01</span>
        <div class="svc__main">
          <h3 class="svc__title">Fallen leaves</h3>
          <p class="svc__text">Collect floating leaf mats and loose leaves gathering near
          shorelines, docks, and pond edges.</p>
        </div>
      </article>

      <article class="svc reveal">
        <span class="svc__num">02</span>
        <h3 class="svc__title">Plant material</h3>
        <p class="svc__text">Remove loose vegetation and organic plant debris floating on the
        surface.</p>
      </article>

      <article class="svc reveal">
        <span class="svc__num">03</span>
        <h3 class="svc__title">Branches and small trees</h3>
        <p class="svc__text">Cut or lift low-hanging branches, small trees, and woody material
        obstructing the water.</p>
      </article>

      <article class="svc reveal">
        <span class="svc__num">04</span>
        <h3 class="svc__title">Storm debris</h3>
        <p class="svc__text">Clear natural material carried into the water after wind, rain, or
        seasonal storms.</p>
      </article>
    </div>
  </div>
</section>

<!-- ============ EQUIPMENT ============ -->
<section class="section section--band on-dark" id="equipment">
  <div class="wrap">
    <div class="section__head reveal">
      <p class="eyebrow">The equipment</p>
      <h2 class="h2">The right equipment for debris removal.</h2>
      <p class="lead">Different types of debris require different tools. Our work boat uses
      interchangeable attachments to collect surface material and manage heavier obstacles.</p>
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
            <h3 class="kit__h">Skimmer attachment</h3>
            <p class="kit__p">Collects leaves, algae, and fine floating organic material from the
            surface.</p>
          </div>
        </li>
        <li class="kit__row reveal">
          <span class="kit__tag">02</span>
          <div>
            <h3 class="kit__h">Vegetation bucket</h3>
            <p class="kit__p">Lifts heavier plant material and larger accumulations from shallow
            water.</p>
          </div>
        </li>
        <li class="kit__row reveal">
          <span class="kit__tag">03</span>
          <div>
            <h3 class="kit__h">Hydraulic pole saw</h3>
            <p class="kit__p">Cuts low-hanging branches, small trees, and downed wood while working
            from the water.</p>
          </div>
        </li>
        <li class="kit__row reveal">
          <span class="kit__tag">04</span>
          <div>
            <h3 class="kit__h">Work boat</h3>
            <p class="kit__p">Provides access to shallow shorelines, coves, docks, and confined
            areas where debris commonly collects.</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ FAQ ============ -->
<section class="section section--wavetop" id="faq">
  <svg class="wavetop" viewBox="0 0 1440 130" preserveAspectRatio="none" aria-hidden="true">
    <path class="w1" d="M0 60c180 40 320-30 520-10s300 60 480 30 260-40 440-20v70H0z"/>
    <path class="w2" d="M0 80c200 30 340-20 540 5s320 50 500 20 220-30 400-15v55H0z"/>
  </svg>
  <div class="wrap">
    <div class="section__head reveal">
      <p class="eyebrow">Questions</p>
      <h2 class="h2">Leaf and debris removal questions.</h2>
    </div>

    <div class="faq">
      <details class="faq__item reveal">
        <summary class="faq__q">What types of debris can you remove?
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
        </summary>
        <p class="faq__a">The equipment can collect fallen leaves, loose plant material, floating
        organic debris, branches, small trees, and downed logs.</p>
      </details>

      <details class="faq__item reveal">
        <summary class="faq__q">Can you remove debris from shallow water?
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
        </summary>
        <p class="faq__a">The compact work boat is designed to access shallow and confined areas
        where full-size equipment may have difficulty operating.</p>
      </details>

      <details class="faq__item reveal">
        <summary class="faq__q">Can you remove storm-damaged branches?
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
        </summary>
        <p class="faq__a">A hydraulic pole saw and other attachments can manage qualifying branches,
        small trees, and downed wood in or near the water.</p>
      </details>

      <details class="faq__item reveal">
        <summary class="faq__q">When is the best time for lake leaf removal?
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
        </summary>
        <p class="faq__a">Spring and fall are common cleanup periods. The best timing depends on
        tree coverage, weather, and how quickly leaves and debris accumulate.</p>
      </details>

      <details class="faq__item reveal">
        <summary class="faq__q">Can this service be combined with weed removal?
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
        </summary>
        <p class="faq__a">Yes. Leaf and debris cleanup can be completed alongside aquatic
        vegetation, shoreline, or muck removal.</p>
      </details>
    </div>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="section section--cta on-dark">
  <div class="wrap cta">
    <div class="cta__copy reveal">
      <p class="eyebrow">Free estimate</p>
      <h2 class="cta__h">Clear the leaves and debris from your water.</h2>
      <p class="cta__p">Send us photos of the affected lake, pond, or shoreline. We will review the
      material, access conditions, and project scope before recommending the appropriate cleanup
      approach.</p>
    </div>
    <div class="cta__side reveal">
      <a class="cta__call" href="tel:+15184417742">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 3h3l2 5-2.5 1.5a11 11 0 005 5L15 12l5 2v3a2 2 0 01-2.2 2C11 18.4 5.6 13 5 6.2A2 2 0 016 3z"/></svg>
        <span><b>+1 (518) 441-7742</b><em>jim@wedowaterweeds.com</em></span>
      </a>
      <a class="btn btn--primary btn--lg btn--block" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request a Free Estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
    </div>
  </div>
</section>

</main>

<?php
get_footer();
