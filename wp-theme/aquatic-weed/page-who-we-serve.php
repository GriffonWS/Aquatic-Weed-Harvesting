<?php
/**
 * Template Name: Who we serve
 *
 * Renders for the Page with slug "who-we-serve"; awh_create_pages() creates it.
 *
 * @package aquatic-weed
 */

get_header();
?>

<main id="main">

<!-- ============ PAGE HERO ============ -->
<section class="phero on-dark">
  <div class="wrap phero__inner">
    <p class="phero__crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> <i>/</i> <b>Who we serve</b></p>
    <h1 class="phero__title">Three kinds of<br><em>waterfront</em>.</h1>
    <p class="phero__lead">A private dock and a municipal boat launch are the same problem at different scale. What changes is the access, the paperwork and how we schedule it.</p>
    <div class="phero__cta">
      <a class="btn btn--primary btn--lg" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request an estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      <a class="btn btn--ghost btn--lg" href="tel:+15184417742">(518) 441-7742</a>
    </div>
  </div>
</section>

<!-- ============ WHO WE SERVE ============ -->
<section class="section section--serve section--wavetop" id="serve">
  <svg class="wavetop" viewBox="0 0 1440 130" preserveAspectRatio="none" aria-hidden="true">
    <path class="w1" d="M0 60c180 40 320-30 520-10s300 60 480 30 260-40 440-20v70H0z"/>
    <path class="w2" d="M0 80c200 30 340-20 540 5s320 50 500 20 220-30 400-15v55H0z"/>
  </svg>
  <div class="wrap">
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
        <p class="serveCard__p">Private frontage on a lake, a pond in the back field, a river bank.
        Usually a one- or two-day job to open up the dock, the swim area and the view.</p>
        <ul class="serveCard__list">
          <li>Docks, swim areas &amp; boat lanes</li>
          <li>Farm and backyard ponds</li>
          <li>No public ramp needed — we trailer in</li>
        </ul>
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
        <p class="serveCard__p">Where the water is part of the business — and a weed mat is something
        guests, members and residents see first.</p>
        <ul class="serveCard__list">
          <li>Campgrounds &amp; marinas</li>
          <li>Golf courses &amp; resorts</li>
          <li>HOAs and lake associations</li>
          <li>Scheduled around your season, not ours</li>
        </ul>
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
        <p class="serveCard__p">Town and village waterbodies, public beaches and launches, parks
        departments and conservation districts.</p>
        <ul class="serveCard__list">
          <li>Public beaches &amp; boat launches</li>
          <li>Invasive-species management programs</li>
          <li>Chemical-free — no closure or re-entry window</li>
          <li>Documented volumes removed, if you need them</li>
        </ul>
      </article>
    </div>

    <p class="serve__note reveal">Whoever you are, the estimate is free and the answer is honest —
    if your water doesn't need harvesting this season, we'll tell you that instead.</p>
  </div>
</section>

<!-- ============ CTA ============ -->
<section class="section section--cta on-dark">
  <div class="wrap cta">
    <div class="cta__copy reveal">
      <p class="eyebrow">Free estimate</p>
      <h2 class="cta__h">Send us a photo of your water.</h2>
      <p class="cta__p">That’s all we need to start. We’ll tell you what’s growing, what it takes to
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
