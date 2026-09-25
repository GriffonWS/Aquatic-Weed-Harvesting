<?php
/**
 * Template Name: Resources
 *
 * Renders for the Page with slug "resources"; awh_create_pages() creates it.
 * Content mirrors the approved static resources.html.
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
        <p class="phero__crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> <i>/</i> <b>Resources</b></p>
        <h1 class="xhero__title">Aquatic Weed Removal Videos and <em>Guides</em></h1>
        <p class="xhero__lead">Explore videos and helpful guides on mechanical aquatic weed removal for lake, pond, and shoreline owners across New York, New Jersey, and Pennsylvania. Learn how harvesting works, identify common aquatic plants, and understand which removal approach may fit your waterbody.</p>
        <div class="xhero__cta">
          <a class="btn btn--primary btn--lg" href="#blogs">Explore Insights <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
          <a class="btn btn--ghost btn--lg" href="tel:+15184417742">Call +1 (518) 441-7742</a>
        </div>
      </div>

      <figure class="xhero__media reveal">
        <img src="<?php echo awh_img( 'harvester-shoreline.webp' ); ?>" width="1024" height="768" fetchpriority="high" decoding="async"
          alt="The work boat delivering cut vegetation to the shoreline for removal.">
      </figure>
    </div>
  </div>
</section>

<!-- ============ RESOURCES ============ -->
<section class="section section--wavetop" id="resources">
  <svg class="wavetop" viewBox="0 0 1440 130" preserveAspectRatio="none" aria-hidden="true">
    <path class="w1" d="M0 60c180 40 320-30 520-10s300 60 480 30 260-40 440-20v70H0z"/>
    <path class="w2" d="M0 80c200 30 340-20 540 5s320 50 500 20 220-30 400-15v55H0z"/>
  </svg>
  <div class="wrap">
    <div class="res">
      <!-- VIDEO SLOT — placeholder until the owners send footage.
           To go live: replace .res__slot with the YouTube/Vimeo iframe, keep the
           wrapper (it holds the 16:9 ratio and the rounded corner). -->
      <article class="res__video reveal" id="videos">
        <p class="eyebrow">Videos</p>
        <!-- Manufacturer footage of the Weedoo work boat, streamed from Weedoo's
             own server rather than hosted here. The poster is local, so the card
             still shows the boat if that URL ever moves. Our own job footage
             replaces this once the owners send it. -->
        <video class="res__player" controls playsinline preload="none"
               poster="<?php echo awh_img( 'weedoo-work-boat-poster.jpg' ); ?>" width="1280" height="720">
          <source src="https://weedooboats.com/wp-content/uploads/2025/11/Copy-of-Weedoo-Turbo-2_25-Storyboarder1-1.mp4" type="video/mp4">
          <p>Your browser can't play this video.
             <a href="https://weedooboats.com/wp-content/uploads/2025/11/Copy-of-Weedoo-Turbo-2_25-Storyboarder1-1.mp4">Watch it on weedooboats.com</a>.</p>
        </video>
        <h3 class="res__videoH">Mechanical Harvester Equipment Demonstration</h3>
        <p class="res__videoP">See how a specialized workboat cuts, collects, and removes aquatic
        vegetation from shallow, hard-to-access waters. The demonstration highlights the mechanical
        process and equipment used to manage submerged weeds, floating material, and shoreline growth.</p>
        <p class="res__videoP">Project footage showcases operations across lakes, ponds, and shorelines
        in New York, New Jersey, and Pennsylvania.</p>
      </article>

      <div class="res__list" id="blogs">
        <p class="eyebrow">Blog and Guides</p>
        <a class="res__item reveal" href="<?php echo esc_url( home_url( '/why-mechanical/' ) ); ?>">
          <b class="res__itemH">Why Choose Mechanical Removal?</b>
          <span class="res__itemP">Learn how mechanical harvesting differs from chemical treatment and why physically removing plant material matters.</span>
          <span class="res__cta">Explore Mechanical Removal</span>
          <span class="res__go" aria-hidden="true">→</span>
        </a>
        <a class="res__item reveal" href="<?php echo esc_url( home_url( '/' ) ); ?>#weeds">
          <b class="res__itemH">Identify Common Aquatic Weeds</b>
          <span class="res__itemP">Learn to recognize Eurasian watermilfoil, water chestnut, hydrilla, cattails, lily pads, coontail, and other common aquatic growth.</span>
          <span class="res__cta">See Common Aquatic Weeds</span>
          <span class="res__go" aria-hidden="true">→</span>
        </a>
        <a class="res__item reveal" href="<?php echo esc_url( home_url( '/how-it-works/' ) ); ?>">
          <b class="res__itemH">What Happens on Harvest Day?</b>
          <span class="res__itemP">Follow the process from the initial assessment and equipment setup to vegetation collection and final removal.</span>
          <span class="res__cta">See How Harvesting Works</span>
          <span class="res__go" aria-hidden="true">→</span>
        </a>
        <a class="res__item reveal" href="<?php echo esc_url( home_url( '/municipal-weed-management/' ) ); ?>">
          <b class="res__itemH">Association and Municipal Projects</b>
          <span class="res__itemP">Learn how treatment areas, scheduling, equipment access, documentation, and public-use requirements are managed for shared waterbodies.</span>
          <span class="res__cta">Explore Association and Municipal Services</span>
          <span class="res__go" aria-hidden="true">→</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ============ INVASIVE SPECIES ============ -->
<section class="section section--rule" id="invasive">
  <div class="wrap boat">
    <div class="boat__copy reveal">
      <h2 class="h2">Help Prevent the Spread of Invasive Species</h2>
      <p class="lead">Cleaning boats, trailers, anchors, fishing equipment, and waders before moving
      between waterbodies can help prevent the spread of invasive plants.</p>
      <p class="lead">Requirements vary by state. Check the current guidance from the appropriate New
      York, New Jersey, or Pennsylvania natural-resources agency before launching or transporting
      equipment.</p>
      <p class="lead">Looking for information about a specific aquatic plant?
      <a class="text-link" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Contact us</a> for identification
      help and removal guidance.</p>
    </div>
    <figure class="shot shot--wide reveal">
      <img src="<?php echo awh_img( 'weed-milfoil.jpg' ); ?>" width="1200" height="600" loading="lazy" decoding="async"
        alt="Eurasian watermilfoil, an invasive aquatic plant that spreads from fragments carried between waterbodies.">
    </figure>
  </div>
</section>


<!-- ============ CTA ============ -->
<section class="section section--cta on-dark">
  <div class="wrap cta">
    <div class="cta__copy reveal">
      <p class="eyebrow">Free Estimate</p>
      <h2 class="cta__h">Find the Right Approach for Your Waterbody</h2>
      <p class="cta__p">Not sure what is growing or which removal method is appropriate? Tell us about
      the affected area and how it is interfering with your property. We will review the details,
      explain the recommended removal approach, and provide a no-obligation estimate.</p>
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
