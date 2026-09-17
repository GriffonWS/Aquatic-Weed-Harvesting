<?php
/**
 * Template Name: Who we serve
 *
 * Renders for the Page with slug "who-we-serve"; awh_create_pages() creates it.
 * Content mirrors the approved static who-we-serve.html.
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
      "name": "Do you work with individual waterfront homeowners?",
      "acceptedAnswer": { "@type": "Answer", "text": "Absolutely. For private properties, we can target key usage zones, including docks, swimming areas, fishing spots, shorelines, backyard ponds, and boat access points." }
    },
    {
      "@type": "Question",
      "name": "Do you work with lake associations and HOAs?",
      "acceptedAnswer": { "@type": "Answer", "text": "Yes. We can help associations prioritize shared areas such as community beaches, docks, boat lanes, coves, and shorelines." }
    },
    {
      "@type": "Question",
      "name": "Do you provide municipal lake weed management?",
      "acceptedAnswer": { "@type": "Answer", "text": "Yes. Mechanical removal can support municipal vegetation-management projects for public lakes, ponds, beaches, launches, and parks." }
    },
    {
      "@type": "Question",
      "name": "Can you document the amount of material removed?",
      "acceptedAnswer": { "@type": "Answer", "text": "Removed volumes can be documented when requested and included in the agreed project scope." }
    },
    {
      "@type": "Question",
      "name": "Do you apply aquatic herbicides?",
      "acceptedAnswer": { "@type": "Answer", "text": "No. Our services use mechanical equipment to cut, lift, collect, and remove aquatic vegetation or debris." }
    }
  ]
}
</script>

<main id="main">

<!-- ============ PAGE HERO ============ -->
<section class="phero on-dark">
  <div class="wrap phero__inner">
    <p class="phero__crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> <i>/</i> <b>Who we serve</b></p>
    <h1 class="phero__title">Aquatic Weed Removal for Every Type of <em>Waterfront</em></h1>
    <p class="phero__lead">From private docks and community lakes to public beaches and commercial properties, we provide mechanical vegetation and debris removal services tailored to how the waterbody is used.</p>
    <div class="phero__cta">
      <a class="btn btn--primary btn--lg" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request a Free Estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      <a class="btn btn--ghost btn--lg" href="tel:+15184417742">Call (518) 441-7742</a>
    </div>

    <p class="eyebrow" style="margin:clamp(34px,4vw,48px) 0 0">Who we work with</p>
    <ul class="shero__specs" style="margin-top:16px">
      <li class="shero__spec"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>Waterfront property owners</li>
      <li class="shero__spec"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>Businesses and lake associations</li>
      <li class="shero__spec"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>Municipalities and public agencies</li>
    </ul>
  </div>
</section>

<!-- ============ WHO WE SERVE ============ -->
<section class="section section--serve section--wavetop" id="serve">
  <svg class="wavetop" viewBox="0 0 1440 130" preserveAspectRatio="none" aria-hidden="true">
    <path class="w1" d="M0 60c180 40 320-30 520-10s300 60 480 30 260-40 440-20v70H0z"/>
    <path class="w2" d="M0 80c200 30 340-20 540 5s320 50 500 20 220-30 400-15v55H0z"/>
  </svg>
  <div class="wrap">
    <div class="section__head reveal">
      <h2 class="h2">Different properties. Different priorities.</h2>
      <p class="lead">A private pond, busy marina, and public beach may face similar aquatic vegetation problems, but each requires a different approach.</p>
      <p class="lead">Access, scheduling, treatment areas, documentation, and public use all influence how the work should be planned. We tailor the project around the property, the vegetation, and the people who depend on the water.</p>
    </div>

    <div class="serve">
      <article class="serveCard reveal" id="residential">
        <figure class="shot shot--serve">
          <img src="<?php echo awh_img( 'pond-estate-weed.jpg' ); ?>" width="1024" height="768" loading="lazy" decoding="async"
               alt="A private pond thick with surface weed, with the house on the rise behind it.">
        </figure>
        <span class="serveCard__ico" aria-hidden="true">
          <svg viewBox="0 0 24 24"><path d="M3 11l9-7 9 7"/><path d="M5.5 9.6V20h13V9.6"/><path d="M9.5 20v-5h5v5"/></svg>
        </span>
        <h3 class="serveCard__h">Residential</h3>
        <div class="serveCard__p">
          <p>Dense weeds, lily pads, cattails, and floating debris can block docks, restrict swimming, interfere with fishing, and make the shoreline less enjoyable.</p>
          <p>We focus on the areas you use most and recommend a suitable removal plan based on the vegetation, access, and water conditions.</p>
        </div>
        <ul class="serveCard__list">
          <li>Private lakefront properties</li>
          <li>Backyard and farm ponds</li>
          <li>Docks and boat approaches</li>
          <li>Swimming and fishing areas</li>
          <li>Shorelines and shallow coves</li>
          <li>Branch and debris removal</li>
        </ul>
        <a class="svc__link" href="<?php echo esc_url( home_url( '/residential-weed-removal/' ) ); ?>">Residential waterfront details <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      </article>

      <article class="serveCard reveal" id="commercial">
        <figure class="shot shot--serve">
          <img src="<?php echo awh_img( 'crew-full-operation.webp' ); ?>" width="1280" height="960" loading="lazy" decoding="async"
               alt="A full crew working a commercial pond — harvester, excavator and vacuum truck on the bank.">
        </figure>
        <span class="serveCard__ico" aria-hidden="true">
          <svg viewBox="0 0 24 24"><path d="M3.5 9.5h17V20h-17z"/><path d="M2.5 9.5L5 4h14l2.5 5.5z"/><path d="M9.5 20v-6.5h5V20"/></svg>
        </span>
        <h3 class="serveCard__h">Commercial</h3>
        <div class="serveCard__p">
          <p>For campgrounds, marinas, resorts, golf courses, and associations, water quality affects access, appearance, and the visitor experience.</p>
          <p>We coordinate work around operating schedules and focus on the waterfront areas that have the greatest impact on guests, residents, and members.</p>
        </div>
        <ul class="serveCard__list">
          <li>Campgrounds and marinas</li>
          <li>Golf courses and resorts</li>
          <li>Lake and homeowner associations</li>
          <li>Residential communities</li>
          <li>Shared beaches and docks</li>
          <li>Recreational waterfronts</li>
        </ul>
        <a class="svc__link" href="<?php echo esc_url( home_url( '/commercial-weed-management/' ) ); ?>">Commercial property details <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      </article>

      <article class="serveCard reveal" id="municipal">
        <figure class="shot shot--serve">
          <img src="<?php echo awh_img( 'lakeside-crew.webp' ); ?>" width="1024" height="540" loading="lazy" decoding="async"
               alt="Harvested weed staged on a public lakeside access for removal.">
        </figure>
        <span class="serveCard__ico" aria-hidden="true">
          <svg viewBox="0 0 24 24"><path d="M3 21h18"/><path d="M4 21V9h16v12"/><path d="M2.5 9L12 3.5 21.5 9"/><path d="M8 21v-7h3v7M14 14h2.5v7"/></svg>
        </span>
        <h3 class="serveCard__h">Municipal</h3>
        <div class="serveCard__p">
          <p>Public lakes, beaches, launches, and parks require clear project scopes, coordinated scheduling, and attention to water use.</p>
          <p>We provide targeted mechanical vegetation removal for municipalities, parks departments, and other public organizations managing invasive or excessive aquatic growth.</p>
        </div>
        <ul class="serveCard__list">
          <li>Public beaches</li>
          <li>Municipal lakes and ponds</li>
          <li>Boat launches and access channels</li>
          <li>Parks and recreational waterbodies</li>
          <li>Invasive vegetation management</li>
          <li>Shoreline and debris cleanup</li>
        </ul>
        <a class="svc__link" href="<?php echo esc_url( home_url( '/municipal-weed-management/' ) ); ?>">Municipal project details <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      </article>
    </div>
  </div>
</section>

<!-- ============ PROCESS ============ -->
<!-- Dark band: sets the process apart, and gives the .wavetop on the FAQ
     section below something to wave out of. -->
<section class="section section--band on-dark" id="process">
  <div class="wrap">
    <div class="approach">
      <div class="approach__aside reveal">
        <p class="eyebrow">How we work</p>
        <h2 class="h2">Our streamlined process.</h2>
      </div>

      <ol class="approach__list">
        <li class="approach__item reveal">
          <span class="approach__n">01</span>
          <div>
            <h3 class="approach__h">Comprehensive initial assessment</h3>
            <p class="approach__p">We analyze site photos, target vegetation, access points, and specific site usage to map out an effective removal strategy tailored to your waterway.</p>
          </div>
        </li>
        <li class="approach__item reveal">
          <span class="approach__n">02</span>
          <div>
            <h3 class="approach__h">Targeted priority mapping</h3>
            <p class="approach__p">We focus execution directly where it matters most—clearing high-impact zones around docks, swimming areas, high-traffic channels, and shorelines.</p>
          </div>
        </li>
        <li class="approach__item reveal">
          <span class="approach__n">03</span>
          <div>
            <h3 class="approach__h">Purpose-built equipment deployment</h3>
            <p class="approach__p">Using specialized workboats with versatile attachments, we efficiently tackle dense submerged weeds, stubborn rooted vegetation, and floating debris.</p>
          </div>
        </li>
        <li class="approach__item reveal">
          <span class="approach__n">04</span>
          <div>
            <h3 class="approach__h">Clean mechanical removal</h3>
            <p class="approach__p">Vegetation and organic debris are physically harvested and extracted without chemicals, restoring immediate usability and clarity to your water.</p>
          </div>
        </li>
        <li class="approach__item reveal">
          <span class="approach__n">05</span>
          <div>
            <h3 class="approach__h">Expert guidance</h3>
            <p class="approach__p">Transparency comes first. If mechanical harvesting isn't the ideal solution for your specific water conditions, we'll explain why and point you in the right direction.</p>
          </div>
        </li>
      </ol>
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
      <h2 class="h2">Who we serve FAQs.</h2>
    </div>

    <div class="faq">
      <details class="faq__item reveal">
        <summary class="faq__q">Do you work with individual waterfront homeowners?
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
        </summary>
        <p class="faq__a">Absolutely. For private properties, we can target key usage zones, including docks, swimming areas, fishing spots, shorelines, backyard ponds, and boat access points.</p>
      </details>

      <details class="faq__item reveal">
        <summary class="faq__q">Do you work with lake associations and HOAs?
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
        </summary>
        <p class="faq__a">Yes. We can help associations prioritize shared areas such as community beaches, docks, boat lanes, coves, and shorelines.</p>
      </details>

      <details class="faq__item reveal">
        <summary class="faq__q">Do you provide municipal lake weed management?
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
        </summary>
        <p class="faq__a">Yes. Mechanical removal can support municipal vegetation-management projects for public lakes, ponds, beaches, launches, and parks.</p>
      </details>

      <details class="faq__item reveal">
        <summary class="faq__q">Can you document the amount of material removed?
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
        </summary>
        <p class="faq__a">Removed volumes can be documented when requested and included in the agreed project scope.</p>
      </details>

      <details class="faq__item reveal">
        <summary class="faq__q">Do you apply aquatic herbicides?
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
        </summary>
        <p class="faq__a">No. Our services use mechanical equipment to cut, lift, collect, and remove aquatic vegetation or debris.</p>
      </details>
    </div>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="section section--cta on-dark">
  <div class="wrap cta">
    <div class="cta__copy reveal">
      <h2 class="cta__h">Tell us about your waterfront.</h2>
      <p class="cta__p">From private ponds and commercial properties to community lakes and municipal
      sites, we assist in crafting a customized mechanical removal plan adapted to your waterbody.</p>
      <p class="cta__p">Send us photos and basic project details to get started.</p>
    </div>
    <div class="cta__side reveal">
      <a class="cta__call" href="tel:+15184417742">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 3h3l2 5-2.5 1.5a11 11 0 005 5L15 12l5 2v3a2 2 0 01-2.2 2C11 18.4 5.6 13 5 6.2A2 2 0 016 3z"/></svg>
        <span><b>Call (518) 441-7742</b></span>
      </a>
      <a class="btn btn--primary btn--lg btn--block" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request a Free Estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
    </div>
  </div>
</section>

</main>

<?php
get_footer();
