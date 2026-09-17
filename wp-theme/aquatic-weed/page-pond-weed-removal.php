<?php
/**
 * Template Name: Pond Weed Removal
 *
 * Renders for the Page with slug "pond-weed-removal"; awh_create_pages() creates it.
 * Content mirrors the approved static pond-weed-removal.html.
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
      "name": "What types of ponds do you work in?",
      "acceptedAnswer": { "@type": "Answer", "text": "We service residential, farm, community, association, and commercial ponds, provided site access and water conditions are suitable for our equipment." }
    },
    {
      "@type": "Question",
      "name": "Do you use aquatic herbicides?",
      "acceptedAnswer": { "@type": "Answer", "text": "No. We use mechanical equipment to cut, lift, collect, and remove vegetation." }
    },
    {
      "@type": "Question",
      "name": "Will pond weeds grow back?",
      "acceptedAnswer": { "@type": "Answer", "text": "Some regrowth is normal. Mechanical removal manages existing vegetation but does not permanently eradicate every plant or prevent new growth." }
    },
    {
      "@type": "Question",
      "name": "Can you remove cattails?",
      "acceptedAnswer": { "@type": "Answer", "text": "The root-rake attachment can be used to remove heavy cattail growth where water depth and access conditions allow." }
    },
    {
      "@type": "Question",
      "name": "Can you remove algae?",
      "acceptedAnswer": { "@type": "Answer", "text": "The skimmer attachment can collect certain types of floating algae and fine surface material." }
    }
  ]
}
</script>

<main id="main">

<!-- ============ PAGE HERO ============ -->
<section class="shero on-dark">
  <figure class="shero__panel">
    <img src="<?php echo awh_img( 'pond-estate-weed.jpg' ); ?>" width="1024" height="768" loading="eager" decoding="async" fetchpriority="high"
      alt="A private estate pond under a full mat of duckweed and algae.">
  </figure>

  <div class="shero__inner">
    <p class="phero__crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> <i>/</i> <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a> <i>/</i> <b>Pond weed removal</b></p>
    <h1 class="shero__title">Chemical-Free Mechanical Pond Weed Removal &amp; <em>Harvesting</em></h1>
    <p class="shero__lead">Remove unwanted weeds, lily pads, cattails, algae, and other floating
    vegetation from shallow areas of the pond. Our compact work boat mechanically cuts, collects,
    and removes excessive growth without the need for herbicide application.</p>

    <div class="shero__cta">
      <a class="btn btn--primary btn--lg" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request a Free Estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      <a class="btn btn--ghost btn--lg" href="tel:+15184417742">Call (518) 441-7742</a>
    </div>
  </div>
</section>

<!-- ============ A MORE USABLE POND ============ -->
<section class="section" id="usable">
  <div class="wrap">
    <div class="approach">
      <div class="approach__aside reveal">
        <p class="eyebrow">What it gives you back</p>
        <h2 class="h2">A more usable pond without herbicide application.</h2>
      </div>

      <ul class="approach__list">
        <li class="approach__item reveal">
          <span class="approach__n">01</span>
          <div>
            <h3 class="approach__h">Restore access</h3>
            <p class="approach__p">Clear excessive growth from shorelines, docks, fishing spots, and
            other frequently used areas.</p>
          </div>
        </li>
        <li class="approach__item reveal">
          <span class="approach__n">02</span>
          <div>
            <h3 class="approach__h">Target the problem</h3>
            <p class="approach__p">Focus removal on the parts of the pond where vegetation is
            creating the greatest disruption.</p>
          </div>
        </li>
        <li class="approach__item reveal">
          <span class="approach__n">03</span>
          <div>
            <h3 class="approach__h">Remove the material</h3>
            <p class="approach__p">Collect cut vegetation and floating growth rather than leaving it
            in the water.</p>
          </div>
        </li>
        <li class="approach__item reveal">
          <span class="approach__n">04</span>
          <div>
            <h3 class="approach__h">Reach shallow areas</h3>
            <p class="approach__p">Use compact equipment designed for smaller, shallower waterbodies
            where full-size harvesters may be unsuitable.</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ COMMON POND VEGETATION ============ -->
<section class="section section--rule" id="vegetation">
  <div class="wrap">
    <div class="section__head section__head--split reveal">
      <div>
        <p class="eyebrow">What we handle</p>
        <h2 class="h2">Common pond vegetation we handle.</h2>
      </div>
      <p class="lead">Different pond problems require different tools. Our work boat can be
      configured to manage submerged, rooted, emergent, and floating growth.</p>
    </div>

    <div class="wfront wfront--5">
      <article class="wfrontCard reveal">
        <img src="<?php echo awh_img( 'weed-hydrilla.jpg' ); ?>" width="1200" height="600" loading="lazy" decoding="async"
             alt="Hydrilla growing in thick submerged mats below the waterline.">
        <div class="wfrontCard__body">
          <h3 class="wfrontCard__h">Submerged aquatic weeds</h3>
          <p class="wfrontCard__p">Mechanically cut and collect excessive underwater vegetation
          affecting access and open water.</p>
        </div>
      </article>

      <article class="wfrontCard reveal">
        <img src="<?php echo awh_img( 'weed-lily.jpg' ); ?>" width="1200" height="600" loading="lazy" decoding="async"
             alt="Lily pads covering the surface of a shallow pond.">
        <div class="wfrontCard__body">
          <h3 class="wfrontCard__h">Lily pads</h3>
          <p class="wfrontCard__p">Remove dense lily pad growth from selected shorelines, fishing
          areas, and other high-use parts of the pond.</p>
        </div>
      </article>

      <article class="wfrontCard reveal">
        <img src="<?php echo awh_img( 'weed-cattail.jpg' ); ?>" width="1200" height="600" loading="lazy" decoding="async"
             alt="A dense cattail stand along a soft shoreline edge.">
        <div class="wfrontCard__body">
          <h3 class="wfrontCard__h">Cattails</h3>
          <p class="wfrontCard__p">Use the root-rake attachment to lift and remove heavy cattail
          growth from shallow areas.</p>
        </div>
      </article>

      <article class="wfrontCard reveal">
        <img src="<?php echo awh_img( 'weed-algae.jpg' ); ?>" width="1200" height="600" loading="lazy" decoding="async"
             alt="A mat of filamentous algae floating across the surface of the water.">
        <div class="wfrontCard__body">
          <h3 class="wfrontCard__h">Algae and floating material</h3>
          <p class="wfrontCard__p">Collect surface algae and small floating particles using the
          skimmer attachment.</p>
        </div>
      </article>

      <article class="wfrontCard reveal">
        <img src="<?php echo awh_img( 'weed-chestnut.jpg' ); ?>" width="1200" height="600" loading="lazy" decoding="async"
             alt="A water chestnut rosette floating on open water, spiked seed visible at the edge.">
        <div class="wfrontCard__body">
          <h3 class="wfrontCard__h">Invasive aquatic plants</h3>
          <p class="wfrontCard__p">Target species such as Eurasian watermilfoil, hydrilla, and water
          chestnut are suitable for mechanical removal.</p>
        </div>
      </article>
    </div>

    <p class="serve__note reveal">Not sure what is growing? Send us a clear photo of the affected
    area, and we will help identify the vegetation.
    <a class="offer__link" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Send us a photo <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a></p>
  </div>
</section>

<!-- ============ EQUIPMENT ============ -->
<section class="section" id="equipment">
  <div class="wrap">
    <div class="section__head reveal">
      <p class="eyebrow">The equipment</p>
      <h2 class="h2">Equipment matched to the pond.</h2>
      <p class="lead">Ponds can contain several types of vegetation in a relatively small area. We
      utilize interchangeable attachments to tailor our removal approach to the specific vegetation
      present.</p>
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
            <h3 class="kit__h">High-speed underwater cutter</h3>
            <p class="kit__p">Cuts submerged aquatic vegetation while the work boat moves through
            the affected area.</p>
          </div>
        </li>
        <li class="kit__row reveal">
          <span class="kit__tag">02</span>
          <div>
            <h3 class="kit__h">Root rake</h3>
            <p class="kit__p">Lifts cattails and heavier-rooted vegetation from shallow pond
            areas.</p>
          </div>
        </li>
        <li class="kit__row reveal">
          <span class="kit__tag">03</span>
          <div>
            <h3 class="kit__h">Skimmer attachment</h3>
            <p class="kit__p">Collects algae, duckweed, and other small material floating on the
            surface.</p>
          </div>
        </li>
        <li class="kit__row reveal">
          <span class="kit__tag">04</span>
          <div>
            <h3 class="kit__h">Hydraulic pole saw</h3>
            <p class="kit__p">Cuts low-hanging branches, small trees, and drowned wood obstructing
            the water or shoreline.</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ PROCESS ============ -->
<!-- Dark band: sets the four steps apart as a sequence, and gives the
     .wavetop on the FAQ section below something to wave out of. -->
<section class="section section--band on-dark" id="process">
  <div class="wrap">
    <div class="section__head reveal">
      <p class="eyebrow">The process</p>
      <h2 class="h2">How pond weed removal works.</h2>
    </div>

    <ol class="flow flow--4">
      <li class="flow__step reveal">
        <figure class="flow__media">
          <img src="<?php echo awh_img( 'before-cleaning.jpg' ); ?>" width="1024" height="768" loading="lazy" decoding="async"
               alt="A pond blanketed shore to shore in bright green algae.">
        </figure>
        <div class="flow__bar"><span class="flow__n">1</span><span class="flow__rule"></span></div>
        <h3 class="flow__h">Show us the pond</h3>
        <p class="flow__p">Send photos of the vegetation, affected area, shoreline, and available
        access. Include the pond's approximate size if known.</p>
      </li>

      <li class="flow__step reveal">
        <figure class="flow__media">
          <img src="<?php echo awh_img( 'weedoo-work-boat-poster.jpg' ); ?>" width="1400" height="786" loading="lazy" decoding="async"
               alt="The shallow-draft work boat staged at the water's edge with its attachment fitted.">
        </figure>
        <div class="flow__bar"><span class="flow__n">2</span><span class="flow__rule"></span></div>
        <h3 class="flow__h">Receive a recommendation</h3>
        <p class="flow__p">We review what is growing and determine which equipment and removal
        method are appropriate.</p>
      </li>

      <li class="flow__step reveal">
        <figure class="flow__media">
          <img src="<?php echo awh_img( 'harvester-shoreline.webp' ); ?>" width="1024" height="768" loading="lazy" decoding="async"
               alt="Cut vegetation lifted out at the waterline onto the bank.">
        </figure>
        <div class="flow__bar"><span class="flow__n">3</span><span class="flow__rule"></span></div>
        <h3 class="flow__h">Select the priority areas</h3>
        <p class="flow__p">We identify the shoreline, access points, fishing areas, or open-water
        sections that need attention.</p>
      </li>

      <li class="flow__step reveal">
        <figure class="flow__media">
          <img src="<?php echo awh_img( 'after-cleaning.webp' ); ?>" width="2048" height="1536" loading="lazy" decoding="async"
               alt="The same water after harvesting — open and clear again.">
        </figure>
        <div class="flow__bar"><span class="flow__n">4</span><span class="flow__rule"></span></div>
        <h3 class="flow__h">Remove the growth</h3>
        <p class="flow__p">The work boat mechanically cuts, lifts, or collects the unwanted
        vegetation and removes the collected material from the water.</p>
      </li>
    </ol>
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
      <h2 class="h2">Pond weed removal questions.</h2>
    </div>

    <div class="faq">
      <details class="faq__item reveal">
        <summary class="faq__q">What types of ponds do you work in?
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
        </summary>
        <p class="faq__a">We service residential, farm, community, association, and commercial
        ponds, provided site access and water conditions are suitable for our equipment.</p>
      </details>

      <details class="faq__item reveal">
        <summary class="faq__q">Do you use aquatic herbicides?
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
        </summary>
        <p class="faq__a">No. We use mechanical equipment to cut, lift, collect, and remove
        vegetation.</p>
      </details>

      <details class="faq__item reveal">
        <summary class="faq__q">Will pond weeds grow back?
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
        </summary>
        <p class="faq__a">Some regrowth is normal. Mechanical removal manages existing vegetation
        but does not permanently eradicate every plant or prevent new growth.</p>
      </details>

      <details class="faq__item reveal">
        <summary class="faq__q">Can you remove cattails?
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
        </summary>
        <p class="faq__a">The root-rake attachment can be used to remove heavy cattail growth where
        water depth and access conditions allow.</p>
      </details>

      <details class="faq__item reveal">
        <summary class="faq__q">Can you remove algae?
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
        </summary>
        <p class="faq__a">The skimmer attachment can collect certain types of floating algae and
        fine surface material.</p>
      </details>
    </div>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="section section--cta on-dark">
  <div class="wrap cta">
    <div class="cta__copy reveal">
      <p class="eyebrow">Free pond assessment</p>
      <h2 class="cta__h">Show us what is growing.</h2>
      <p class="cta__p">Send us photos of your pond and the areas you want cleared. We will review
      the vegetation, explain the recommended removal approach, and provide a no-obligation
      estimate.</p>
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
