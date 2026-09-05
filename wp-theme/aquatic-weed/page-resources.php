<?php
/**
 * Template Name: Resources
 *
 * Renders for the Page with slug "resources"; awh_create_pages() creates it.
 *
 * @package aquatic-weed
 */

get_header();
?>

<main id="main">

<!-- ============ PAGE HERO ============ -->
<section class="phero on-dark">
  <div class="wrap phero__inner">
    <p class="phero__crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> <i>/</i> <b>Resources</b></p>
    <h1 class="phero__title">Watch it work.<br>Read the <em>why</em>.</h1>
    <p class="phero__lead">Short guides on what grows in Northeast water and why we take it out instead of spraying it — plus footage from the boat as we shoot it.</p>
    <div class="phero__cta">
      <a class="btn btn--primary btn--lg" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request an estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      <a class="btn btn--ghost btn--lg" href="tel:+15184417742">(518) 441-7742</a>
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
      <!-- VIDEO SLOT — placeholder until the McNamees send footage.
           To go live: replace .res__slot with the YouTube/Vimeo iframe, keep the
           wrapper (it holds the 16:9 ratio and the rounded corner). -->
      <article class="res__video reveal" id="videos">
        <p class="eyebrow">Videos</p>
        <!-- Manufacturer footage of the Weedoo work boat, streamed from Weedoo's
             own server rather than hosted here. The poster is local, so the card
             still shows the boat if that URL ever moves. Our own job footage
             replaces this once the McNamees send it. -->
        <video class="res__player" controls playsinline preload="none"
               poster="<?php echo awh_img( 'weedoo-work-boat-poster.jpg' ); ?>" width="1280" height="720">
          <source src="https://weedooboats.com/wp-content/uploads/2025/11/Copy-of-Weedoo-Turbo-2_25-Storyboarder1-1.mp4" type="video/mp4">
          <p>Your browser can't play this video.
             <a href="https://weedooboats.com/wp-content/uploads/2025/11/Copy-of-Weedoo-Turbo-2_25-Storyboarder1-1.mp4">Watch it on weedooboats.com</a>.</p>
        </video>
        <h3 class="res__videoH">The work boat, up close</h3>
        <p class="res__videoP">Thirty seconds on the machine itself — the cutter head, the collection
        basket and the shoreline reach that lets it work where a full-size harvester can't. Filmed by
        Weedoo, who build the boat. Footage from our own Northeast jobs goes up as we shoot it
        this season.</p>
      </article>

      <div class="res__list" id="blogs">
        <p class="eyebrow">Blog &amp; guides</p>
        <a class="res__item reveal" href="<?php echo esc_url( home_url( '/why-mechanical/' ) ); ?>">
          <span class="res__kind">Guide</span>
          <b class="res__itemH">Why mechanical removal beats spraying</b>
          <span class="res__itemP">What actually happens to a weed after it's sprayed — and where
          all that biomass ends up.</span>
          <span class="res__go" aria-hidden="true">→</span>
        </a>
        <a class="res__item reveal" href="<?php echo esc_url( home_url( '/' ) ); ?>#weeds">
          <span class="res__kind">Guide</span>
          <b class="res__itemH">Common invaders to look out for</b>
          <span class="res__itemP">Milfoil, water chestnut, hydrilla, cattails, lily pads and
          coontail — how to tell what you're looking at.</span>
          <span class="res__go" aria-hidden="true">→</span>
        </a>
        <a class="res__item reveal" href="<?php echo esc_url( home_url( '/how-it-works/' ) ); ?>">
          <span class="res__kind">Guide</span>
          <b class="res__itemH">What a harvest day looks like</b>
          <span class="res__itemP">From the photo you send us to the last basket going off your
          shoreline.</span>
          <span class="res__go" aria-hidden="true">→</span>
        </a>
        <a class="res__item reveal" href="<?php echo esc_url( home_url( '/' ) ); ?>#serve">
          <span class="res__kind">Guide</span>
          <b class="res__itemH">Association &amp; municipal harvesting</b>
          <span class="res__itemP">How scheduling, access and documentation work when the water
          isn't one person's.</span>
          <span class="res__go" aria-hidden="true">→</span>
        </a>
      </div>
    </div>

    <p class="res__note reveal">
      <b>New state laws</b> require properly cleaning boats, trailers and waders to limit the spread
      of aquatic invasive species — worth passing on to anyone launching on your water.
      Want a written guide on a specific weed? <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Ask us</a> and we'll put one up.
    </p>
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
