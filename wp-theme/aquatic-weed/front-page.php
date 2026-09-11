<?php
/**
 * Front page — the single-page site.
 *
 * Content is intentionally hard-coded rather than pulled from the editor: the
 * client sends copy changes by email and does not maintain the site. If that
 * changes, ACF is the drop-in — the section markup is already grouped for it.
 *
 * @package aquatic-weed
 */

get_header();
?>

<main id="main">

<!-- ============ HERO ============ -->
<section class="hero on-dark">
  <div class="hero__photo" aria-hidden="true">
    <img src="<?php echo awh_img( 'hero-harvesting.jpg' ); ?>" width="1600" height="1066" fetchpriority="high"
         alt="" decoding="async">
  </div>
  <canvas class="hero__canvas" id="ripple" aria-hidden="true"></canvas>
  <div class="hero__glow" aria-hidden="true"></div>

  <div class="hero__inner">
    <p class="hero__eyebrow"><span class="dot"></span> Aquatic Weed Harvesting LLC &middot; Based in the Hudson Valley</p>
    <h1 class="hero__title">
      <span class="line"><span>Got</span></span>
      <span class="line"><span>Lake <em>Weeds</em>?</span></span>
    </h1>
    <p class="hero__lead">
      We cut them, collect them, and haul them off your shoreline — mechanically,
      with <strong>zero chemicals</strong>. Our work boat gets into the shallow,
      windy water the big harvesters can't touch.
    </p>
    <div class="hero__cta">
      <a class="btn btn--primary btn--lg" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request an estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      <a class="btn btn--ghost btn--lg" href="<?php echo esc_url( home_url( '/' ) ); ?>#before-after">See the difference</a>
    </div>

    <ul class="hero__stats">
      <li class="stat"><b class="stat__num" data-count="0">0</b><span class="stat__label">Chemicals used<br>on your water</span></li>
      <li class="stat"><b class="stat__num" data-count="5" data-suffix=" ft">5 ft</b><span class="stat__label">Cutting depth<br>below the surface</span></li>
      <li class="stat"><b class="stat__num" data-count="4">4</b><span class="stat__label">Quick-change<br>attachments</span></li>
    </ul>
  </div>

  <svg class="hero__waves" viewBox="0 0 1440 130" preserveAspectRatio="none" aria-hidden="true">
    <path class="w1" d="M0 60c180 40 320-30 520-10s300 60 480 30 260-40 440-20v70H0z"/>
    <path class="w2" d="M0 80c200 30 340-20 540 5s320 50 500 20 220-30 400-15v55H0z"/>
  </svg>

  <a class="hero__scroll" href="<?php echo esc_url( home_url( '/services/' ) ); ?>" aria-label="Scroll down"><span></span></a>
</section>

<!-- ============ MARQUEE ============ -->
<div class="marquee" aria-hidden="true">
  <div class="marquee__track">
    <span>Eurasian Watermilfoil</span><i>&#10022;</i><span>Water Chestnut</span><i>&#10022;</i><span>Hydrilla</span><i>&#10022;</i>
    <span>Lily Pads</span><i>&#10022;</i><span>Cattails</span><i>&#10022;</i><span>Coontail</span><i>&#10022;</i>
    <span>Filamentous Algae</span><i>&#10022;</i><span>Downed Branches</span><i>&#10022;</i>
    <span>Eurasian Watermilfoil</span><i>&#10022;</i><span>Water Chestnut</span><i>&#10022;</i><span>Hydrilla</span><i>&#10022;</i>
    <span>Lily Pads</span><i>&#10022;</i><span>Cattails</span><i>&#10022;</i><span>Coontail</span><i>&#10022;</i>
    <span>Filamentous Algae</span><i>&#10022;</i><span>Downed Branches</span><i>&#10022;</i>
  </div>
</div>

<!-- ============ MISSION ============
     Verbatim from the back of the client's rack card — Kathy asked for this
     statement specifically. Do not paraphrase or tighten it; the only change
     from the printed card is "Hornwort" for the card's "Hornwart" elsewhere
     on the page. -->
<section class="mission">
  <div class="wrap mission__inner">
    <div class="mission__aside reveal">
      <p class="mission__tag">Our commitment</p>
      <p class="mission__slogan">Eco-friendly preservation for lake &amp; pond weed maintenance.</p>
    </div>

    <div class="mission__body reveal">
      <p class="mission__p"><strong>Aquatic Weed Harvesting</strong> values our natural resources and
      strives to improve your lake, pond or riverfront. When removing invasive weeds, the water's
      chemistry returns to normal and the oxygen levels increase, improving the overall health of the
      aquatic life. This can be seen immediately with the response of fish, frogs, and other species.
      Your living ecosystem requires a <em>long term health plan</em>. Together we can form an
      environmental stewardship for sustaining your waterway while enhancing the aesthetic beauty and
      value of your property.</p>

      <p class="mission__p">Conservation and sustainable practices need to be implemented to protect
      our natural environment. We thank responsible people like you who seek solutions to preserve
      our natural resources.</p>

      <p class="mission__join">Join us to win the fight to clean invasive aquatic vegetation from
      our waterways.</p>
    </div>
  </div>
</section>

<!-- ============ BEFORE / AFTER ============ -->
<section class="section" id="before-after">
  <div class="wrap">
    <div class="section__head section__head--center reveal">
      <p class="eyebrow">Before &amp; after</p>
      <h2 class="h2">Same pond.<br>Same week.</h2>
      <p class="lead">Drag the slider to see what comes out of the water.</p>
    </div>

    <div class="ba reveal">
      <div class="ba__frame" tabindex="0" role="slider" aria-label="Before and after comparison" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50">
        <div class="ba__pane ba__pane--after">
          <img src="<?php echo awh_img( 'after-cleaning.webp' ); ?>" width="2048" height="1536" loading="lazy" decoding="async"
               alt="The same pond after harvesting — open water again, with the harvester working the far edge.">
          <span class="ba__tag ba__tag--right">After</span>
        </div>
        <div class="ba__pane ba__pane--before">
          <img src="<?php echo awh_img( 'before-cleaning.jpg' ); ?>" width="1024" height="768" loading="lazy" decoding="async"
               alt="A pond blanketed shore to shore in bright green algae.">
          <span class="ba__tag">Before</span>
        </div>
        <div class="ba__handle"><span class="ba__grip"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 6l-4 6 4 6M15 6l4 6-4 6"/></svg></span></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ WEEDS ============ -->
<section class="section section--rule" id="weeds">
  <div class="wrap">
    <div class="section__head reveal">
      <p class="eyebrow">What we remove</p>
      <h2 class="h2">What we pull out of your water.</h2>
    </div>

    <div class="weeds">
      <article class="weed reveal" data-tag="Invasive">
        <figure class="weed__art">
          <img src="<?php echo awh_img( 'weed-milfoil.jpg' ); ?>" width="1200" height="600" loading="lazy" decoding="async"
               alt="Eurasian watermilfoil in a dense underwater canopy, feathery leaf whorls on reddish stems breaking the lake surface.">
        </figure>
        <h3 class="weed__name">Eurasian Watermilfoil</h3>
        <p class="weed__desc">Feathery, dense, and it spreads from a single broken fragment. Forms mats
        thick enough to stop a propeller. The reason most people call us.</p>
      </article>

      <article class="weed reveal" data-tag="Invasive">
        <figure class="weed__art">
          <img src="<?php echo awh_img( 'weed-chestnut.jpg' ); ?>" width="1200" height="600" loading="lazy" decoding="async"
               alt="A floating water chestnut rosette of toothed triangular leaves on still water, with a spiked seed nut on the shore beside it.">
        </figure>
        <h3 class="weed__name">Water Chestnut</h3>
        <p class="weed__desc">Floating rosettes that blanket the surface and drop spiked nuts on your beach.
        Timing matters — we target it before the seed drops.</p>
      </article>

      <article class="weed reveal" data-tag="Invasive">
        <figure class="weed__art">
          <img src="<?php echo awh_img( 'weed-hydrilla.jpg' ); ?>" width="1200" height="600" loading="lazy" decoding="async"
               alt="Dense strands of hydrilla growing up from the lake bed through sunlit green water.">
        </figure>
        <h3 class="weed__name">Hydrilla</h3>
        <p class="weed__desc">Aggressive, fast, and regulated in New York. Grows from tubers, so mechanical
        removal is about staying ahead of it every season.</p>
      </article>

      <article class="weed reveal" data-tag="Nuisance">
        <figure class="weed__art">
          <img src="<?php echo awh_img( 'weed-lily.jpg' ); ?>" width="1200" height="600" loading="lazy" decoding="async"
               alt="Water lily pads covering a pond surface, with a single white flower open among them.">
        </figure>
        <h3 class="weed__name">Lily Pads</h3>
        <p class="weed__desc">Thick enough to stop a canoe and tangle a swimmer. We clear swim lanes and
        dock approaches, and leave the rest as habitat if you want it.</p>
      </article>

      <article class="weed reveal" data-tag="Nuisance">
        <figure class="weed__art">
          <img src="<?php echo awh_img( 'weed-cattail.jpg' ); ?>" width="1200" height="600" loading="lazy" decoding="async"
               alt="Cattails standing in the shallows at a pond's edge, brown seed heads above an exposed mass of roots.">
        </figure>
        <h3 class="weed__name">Cattails</h3>
        <p class="weed__desc">Root-bound and stubborn. This is a bucket job, not a cutting job — we take the
        root ball so it doesn't march further into the pond.</p>
      </article>

      <article class="weed reveal" data-tag="Surface">
        <figure class="weed__art">
          <img src="<?php echo awh_img( 'weed-algae.jpg' ); ?>" width="1200" height="600" loading="lazy" decoding="async"
               alt="A pond surface carpeted in bright green duckweed and stringy filamentous algae, seen from directly above.">
        </figure>
        <h3 class="weed__name">Algae &amp; Duckweed</h3>
        <p class="weed__desc">Surface scum that shows up on the windward shore. Skimmed off the top and
        removed before it turns your waterfront green.</p>
      </article>
    </div>

    <!-- No photography for these yet, so they run as a line rather than as
         cards with a placeholder image in them. -->
    <p class="weeds__also reveal">
      <b>Also on our waters:</b> Coontail (Hornwort), Phragmites, Curly-leaf Pondweed and general
      nuisance growth — plus the leaves, brush and downed logs that come with a wooded shoreline.
      Not sure what you've got? That's normal. Send a photo and we'll identify it.
    </p>
  </div>
</section>

<!-- ============ WHY NOW ============ -->
<section class="section section--urgency on-dark" id="urgency">
  <div class="wrap urgency">
    <div class="urgency__copy reveal">
      <p class="eyebrow">Why now</p>
      <h2 class="h2">Time is now<br>to harvest.</h2>
      <p class="urgency__lead">Our waterways face accelerating invasive pressure as seeds and root
      fragments spread through boat traffic, wildlife and currents. Invasive plants like water
      chestnut, milfoil, phragmites and hydrilla establish dense mats that deplete oxygen, block
      navigation, prohibit swimming and eliminate habitat for native species.</p>
      <p class="urgency__lead">Harvest mechanically before your invasive coverage expands and
      closes your waterway.</p>
      <a class="btn btn--primary btn--lg" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>#quote">Request an estimate
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
    </div>

    <figure class="urgency__figure reveal">
      <img src="<?php echo awh_img( 'boat-in-weeds.jpg' ); ?>" width="1400" height="876" loading="lazy" decoding="async"
        alt="A harvester cutting a lane through a pond covered edge to edge in dense invasive weed.">
    </figure>

    <aside class="notsurface reveal">
      <h3 class="notsurface__h">This is not a surface removal.</h3>
      <p class="notsurface__p">Aquatic weed harvesting is an essential service for maintaining the
      beauty, health and visibility of your waterway. Removing excessive aquatic vegetation and
      biomass helps improve water clarity, restores natural balance to the ecosystem and makes
      waterways safer.</p>
      <p class="notsurface__note">New state laws require properly cleaning boats, trailers and
      waders to limit the spread of aquatic invasive species.</p>
    </aside>
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
