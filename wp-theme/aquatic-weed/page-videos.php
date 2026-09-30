<?php
/**
 * Template Name: Videos
 *
 * Renders for the Page with slug "videos"; awh_create_pages() creates it.
 * Content mirrors the approved static videos.html.
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
        <p class="phero__crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> <i>/</i> <a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>">Resources</a> <i>/</i> <b>Videos</b></p>
        <h1 class="xhero__title">Aquatic Weed Removal <em>Videos</em></h1>
        <p class="xhero__lead">See mechanical aquatic weed harvesting in action. These videos demonstrate how specialized workboats cut, collect, and remove unwanted vegetation from lakes, ponds, and shorelines.</p>
        <div class="xhero__cta">
          <a class="btn btn--primary btn--lg" href="#videos">Watch the Videos <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
          <a class="btn btn--ghost btn--lg" href="tel:+15184417742">+1 (518) 441-7742</a>
        </div>
      </div>

      <figure class="xhero__media reveal">
        <img src="<?php echo awh_img( 'crew-full-operation.webp' ); ?>" width="1280" height="960" fetchpriority="high" decoding="async"
          alt="The crew running a full harvesting operation, with the work boat on the water and equipment on the bank.">
      </figure>
    </div>
  </div>
</section>

<!-- ============ FEATURED VIDEOS ============ -->
<section class="section section--wavetop" id="videos">
  <svg class="wavetop" viewBox="0 0 1440 130" preserveAspectRatio="none" aria-hidden="true">
    <path class="w1" d="M0 60c180 40 320-30 520-10s300 60 480 30 260-40 440-20v70H0z"/>
    <path class="w2" d="M0 80c200 30 340-20 540 5s320 50 500 20 220-30 400-15v55H0z"/>
  </svg>
  <div class="wrap">
    <div class="section__head reveal">
      <p class="eyebrow">Watch the Work</p>
      <h2 class="h2">Featured Videos</h2>
    </div>

    <div class="vids">
      <article class="res__video reveal">
        <video class="res__player" controls playsinline preload="none"
               poster="<?php echo awh_img( 'services-hero-poster.jpg' ); ?>" width="1280" height="720">
          <source src="<?php echo awh_img( 'services-hero.mp4' ); ?>" type="video/mp4">
          <p>Your browser can't play this video.</p>
        </video>
        <h3 class="res__videoH">Mechanical Weed Harvesting in Action</h3>
        <p class="res__videoP">See how aquatic vegetation is cut and collected during mechanical harvesting.</p>
      </article>

      <article class="res__video reveal">
        <!-- Manufacturer footage of the Weedoo work boat, streamed from Weedoo's
             own server rather than hosted here. The poster is local, so the card
             still shows the boat if that URL ever moves. -->
        <video class="res__player" controls playsinline preload="none"
               poster="<?php echo awh_img( 'weedoo-work-boat-poster.jpg' ); ?>" width="1280" height="720">
          <source src="https://weedooboats.com/wp-content/uploads/2025/11/Copy-of-Weedoo-Turbo-2_25-Storyboarder1-1.mp4" type="video/mp4">
          <p>Your browser can't play this video.
             <a href="https://weedooboats.com/wp-content/uploads/2025/11/Copy-of-Weedoo-Turbo-2_25-Storyboarder1-1.mp4">Watch it on weedooboats.com</a>.</p>
        </video>
        <h3 class="res__videoH">Shallow-Water Equipment Demonstration</h3>
        <p class="res__videoP">Watch the workboat operate in shallow, hard-to-access waterfront areas.</p>
      </article>

      <article class="res__video reveal">
        <video class="res__player" controls playsinline preload="none"
               poster="<?php echo awh_img( 'how-it-works-equipment-poster.jpg' ); ?>" width="960" height="540">
          <source src="<?php echo awh_img( 'how-it-works-equipment.mp4' ); ?>" type="video/mp4">
          <p>Your browser can't play this video.</p>
        </video>
        <h3 class="res__videoH">Quick-Change Attachments</h3>
        <p class="res__videoP">See how different attachments handle submerged weeds, heavy vegetation,
        algae, shoreline growth, branches, and debris.</p>
      </article>
    </div>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="section section--cta on-dark">
  <div class="wrap cta">
    <div class="cta__copy reveal">
      <p class="eyebrow">Free Estimate</p>
      <h2 class="cta__h">See What Mechanical Removal Can Do for Your Water</h2>
      <p class="cta__p">Tell us what is affecting your lake, pond, or shoreline. We will recommend an
      appropriate removal approach and provide a free estimate.</p>
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
