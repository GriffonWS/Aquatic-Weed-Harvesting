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
      <a class="btn btn--primary btn--lg" href="#quote">Request an estimate <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
      <a class="btn btn--ghost btn--lg" href="#before-after">See the difference</a>
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

  <a class="hero__scroll" href="#services" aria-label="Scroll down"><span></span></a>
</section>

<!-- ============ MARQUEE ============ -->
<div class="marquee" aria-hidden="true">
  <div class="marquee__track">
    <span>Eurasian Watermilfoil</span><i>&#10022;</i><span>Water Chestnut</span><i>&#10022;</i><span>Hydrilla</span><i>&#10022;</i>
    <span>Lily Pads</span><i>&#10022;</i><span>Cattails</span><i>&#10022;</i><span>Filamentous Algae</span><i>&#10022;</i>
    <span>Downed Branches</span><i>&#10022;</i>
    <span>Eurasian Watermilfoil</span><i>&#10022;</i><span>Water Chestnut</span><i>&#10022;</i><span>Hydrilla</span><i>&#10022;</i>
    <span>Lily Pads</span><i>&#10022;</i><span>Cattails</span><i>&#10022;</i><span>Filamentous Algae</span><i>&#10022;</i>
    <span>Downed Branches</span><i>&#10022;</i>
  </div>
</div>

<!-- ============ MISSION ============
     Verbatim from the back of the client's rack card — Kathy asked for this
     statement specifically. Do not paraphrase or tighten it. -->
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

    <div class="ba reveal" id="ba">
      <div class="ba__frame" tabindex="0" role="slider" aria-label="Before and after comparison" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50">
        <div class="ba__pane ba__pane--after">
          <img src="<?php echo awh_img( 'after-pond.jpg' ); ?>" width="1900" height="1036" loading="lazy" decoding="async"
               alt="The same pond after harvesting — open water from the dock to the far shore.">
          <span class="ba__tag ba__tag--right">After</span>
        </div>
        <div class="ba__pane ba__pane--before" id="baBefore">
          <img src="<?php echo awh_img( 'before-pond.jpg' ); ?>" width="1900" height="1036" loading="lazy" decoding="async"
               alt="A pond blanketed in weed and lily pads right up to the dock.">
          <span class="ba__tag">Before</span>
        </div>
        <div class="ba__handle" id="baHandle"><span class="ba__grip"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 6l-4 6 4 6M15 6l4 6-4 6"/></svg></span></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ SERVICES ============ -->
<section class="section on-dark" id="services">
  <div class="wrap">
    <div class="section__head section__head--split reveal">
      <div>
        <p class="eyebrow">What we do</p>
        <h2 class="h2">Four quick-change<br>attachments, one boat.</h2>
      </div>
      <p class="lead">Everything is mechanical harvesting — we physically remove the plant and the
      biomass leaves with us. Nothing is sprayed, and nothing is left to rot on the bottom and
      feed next year's growth.</p>
    </div>

    <!-- Text-only by design: the stock/AI equipment photos were pulled because
         they weren't the client's own boat. The photo slots go back in once the
         McNamees send shots of their machine — .svc__media styling is retained. -->
    <div class="svcs svcs--text">
      <article class="svc svc--wide reveal">
        <span class="svc__num">01</span>
        <div class="svc__main">
          <h3 class="svc__title">Cutter</h3>
          <p class="svc__text">The core service. The cutter shears vegetation at the root crown while the
          onboard basket collects it, so the cuttings never drift back into your cove. Ideal for milfoil,
          hydrilla and water chestnut mats.</p>
        </div>
        <ul class="svc__list">
          <li>Cuts down to a depth of 5 feet</li>
          <li>Collects the cuttings as it cuts</li>
          <li>Off-site disposal included</li>
        </ul>
      </article>

      <article class="svc reveal">
        <span class="svc__num">02</span>
        <h3 class="svc__title">Vegetation bucket</h3>
        <p class="svc__text">The vegetation bucket, or front end loader, scoops up vegetation to a
        3 foot depth — the heavy, root-bound material a cutter can't take.</p>
        <ul class="svc__list">
          <li>Scoops to 3 foot depth</li>
          <li>Cattail root balls &amp; matted growth</li>
        </ul>
      </article>

      <article class="svc reveal">
        <span class="svc__num">03</span>
        <h3 class="svc__title">Skimmer bucket</h3>
        <p class="svc__text">Used for finer material and algae — it lifts floating growth off the top of
        the water before it blows onto your beach.</p>
        <ul class="svc__list">
          <li>Finer material &amp; algae</li>
          <li>Surface and just below</li>
        </ul>
      </article>

      <article class="svc reveal">
        <span class="svc__num">04</span>
        <h3 class="svc__title">Hydraulic pole saw</h3>
        <p class="svc__text">Worked from the water side, so nobody has to put a ladder on a soft bank
        or drag brush back up the shoreline.</p>
        <ul class="svc__list">
          <li>Tree branches &amp; small trees</li>
          <li>Downed logs in the water</li>
        </ul>
      </article>
    </div>
  </div>
</section>

<!-- ============ PROCESS ============ -->
<section class="section section--wavetop" id="process">
  <svg class="wavetop" viewBox="0 0 1440 130" preserveAspectRatio="none" aria-hidden="true">
    <path class="w1" d="M0 60c180 40 320-30 520-10s300 60 480 30 260-40 440-20v70H0z"/>
    <path class="w2" d="M0 80c200 30 340-20 540 5s320 50 500 20 220-30 400-15v55H0z"/>
  </svg>
  <div class="wrap">
    <div class="section__head reveal">
      <p class="eyebrow">How it works</p>
      <h2 class="h2">Three steps, start to finish.</h2>
    </div>

    <ol class="steps">
      <li class="step reveal">
        <div class="step__num">1</div>
        <div class="step__body">
          <h3>We look at the water</h3>
          <p>Send photos and a rough idea of the area, or we come out. We identify what's actually
          growing — the plan for water chestnut is not the plan for lily pads — and give you a flat quote.</p>
        </div>
      </li>
      <li class="step reveal">
        <div class="step__num">2</div>
        <div class="step__body">
          <h3>We harvest</h3>
          <p>The work boat launches from your shoreline or the nearest access. It cuts, collects, and shuttles
          full baskets to a staging point on shore. Most residential frontages are a one- or two-day job.</p>
        </div>
      </li>
      <li class="step reveal">
        <div class="step__num">3</div>
        <div class="step__body">
          <h3>It leaves with us</h3>
          <p>Biomass is loaded out and hauled away — not piled at your treeline. You get open water,
          a clean shoreline, and no nutrient load going back into the lake.</p>
        </div>
      </li>
    </ol>
  </div>
</section>

<!-- ============ MECHANICAL VS CHEMICAL ============ -->
<section class="section section--why on-dark" id="why">
  <div class="wrap">
    <div class="section__head reveal">
      <p class="eyebrow">Mechanical vs chemical</p>
      <h2 class="h2">Don't sink the problem.<br>Remove it.</h2>
      <p class="lead">Chemical treatment controls the symptoms, not the cause of the nuisance plant
      problem. Herbicides are a short-term remedy to a longer-term problem. Mechanical harvesting
      allows for precision weed removal and prevents the build-up of biomass and muck.</p>
    </div>

    <div class="compare">
      <article class="cmp cmp--bad reveal">
        <h3 class="cmp__head"><span class="cmp__mark" aria-hidden="true">&#10005;</span> Spraying herbicides</h3>
        <ul class="cmp__list">
          <li>Doesn't remove the plant — it sinks it. The weed dies off and drops to the bottom.</li>
          <li>That dead biomass becomes muck, which fuels more weed growth next season.</li>
          <li>Milfoil fragments can regenerate, so spraying often accelerates the infestation —
          essentially replanting the weed at the bottom of the lake.</li>
          <li>Limits use of the water for a period of time after treatment.</li>
          <li>Introduces chemicals, like glyphosate, into ecosystems where fish, birds, pets and
          people recreate.</li>
          <li>Disrupts aquatic and wildlife habitats.</li>
        </ul>
      </article>

      <article class="cmp cmp--good reveal">
        <h3 class="cmp__head"><span class="cmp__mark" aria-hidden="true">&#10003;</span> Mechanical harvesting</h3>
        <ul class="cmp__list">
          <li>Pulls the problem out by the roots — we physically cut and remove roots, stems,
          fragments and, most importantly, the seeds.</li>
          <li>Prevents the build-up of biomass and muck instead of adding to it.</li>
          <li>We're not just trimming the weed — we're preventing its comeback.</li>
          <li>Immediate use of the waterway for swimming, fishing, boating and irrigation.</li>
          <li>100% chemical-free. No toxic runoff, no collateral damage, no downstream consequences.</li>
          <li>Precision removal that leaves the habitat intact.</li>
        </ul>
      </article>
    </div>

    <div class="factbar reveal">
      <div class="fact">
        <b class="fact__num stat__num" data-count="177">177</b>
        <span class="fact__label">plant species worldwide have developed resistance to herbicides</span>
      </div>
      <div class="fact">
        <b class="fact__num stat__num" data-count="70" data-suffix="+">70+</b>
        <span class="fact__label">of them in the United States, most in agricultural systems</span>
      </div>
      <div class="fact">
        <b class="fact__num stat__num" data-count="0">0</b>
        <span class="fact__label">chemicals introduced to your water by mechanical harvesting</span>
      </div>
    </div>

    <figure class="pull reveal">
      <blockquote>
        <p>Would you spray <em>Roundup</em> on your front lawn and leave the weeds to rot into the
        soil? Or would you pull them out and haul them away?</p>
        <p class="pull__kick">The same principle applies underwater.</p>
      </blockquote>
      <figcaption>Don't sink the problem — remove it. Mechanical harvesting works where chemicals fail.</figcaption>
    </figure>
  </div>
</section>

<!-- ============ THE BOAT ============ -->
<section class="section section--boat on-dark" id="boat">
  <div class="wrap boat">
    <div class="boat__copy reveal">
      <p class="eyebrow">The equipment</p>
      <h2 class="h2">Small boat,<br>shallow water.</h2>
      <p class="lead">Full-size harvesters need depth, open water and a launch ramp. Most weed problems
      are the exact opposite — a shallow, weedy, wind-blown corner of a lake with a private dock in the
      way. Our work boat is built for that corner.</p>
      <ul class="boat__specs">
        <li class="spec"><b>Shallow draft</b><span>Works where harvesters run aground</span></li>
        <li class="spec"><b>Holds position</b><span>Stable in wind and chop</span></li>
        <li class="spec"><b>Quick-change tools</b><span>Cutter, bucket, skimmer, saw</span></li>
        <li class="spec"><b>Trailerable</b><span>No public ramp required</span></li>
      </ul>
    </div>
    <div class="boat__figure reveal">
      <figure class="shot shot--feature">
        <img src="<?php echo awh_img( 'boat-in-weeds.jpg' ); ?>" width="1400" height="876" loading="lazy" decoding="async"
             alt="The work boat cutting a channel through a pond blanketed in aquatic weed.">
      </figure>
      <div class="boat__badge">
        <b>No<br>chemicals</b>
        <svg viewBox="0 0 100 100" aria-hidden="true"><path id="circ" d="M50 50m-43 0a43 43 0 1086 0a43 43 0 10-86 0" fill="none"/><text><textPath href="#circ">mechanical harvesting &middot; eco-conscious &middot; </textPath></text></svg>
      </div>
    </div>
  </div>
</section>

<!-- ============ WEEDS ============ -->
<section class="section section--wavetop" id="weeds">
  <svg class="wavetop" viewBox="0 0 1440 130" preserveAspectRatio="none" aria-hidden="true">
    <path class="w1" d="M0 60c180 40 320-30 520-10s300 60 480 30 260-40 440-20v70H0z"/>
    <path class="w2" d="M0 80c200 30 340-20 540 5s320 50 500 20 220-30 400-15v55H0z"/>
  </svg>
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
      <a class="btn btn--primary btn--lg" href="#quote">Request an estimate
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg></a>
    </div>

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

<!-- ============ QUOTE ============ -->
<section class="section section--quote on-dark" id="quote">
  <div class="wrap quote-wrap">
    <div class="quote-copy reveal">
      <p class="eyebrow">Free estimate</p>
      <h2 class="h2">Send us a photo<br>of your water.</h2>
      <p class="lead">That's all we need to start. Fill this in and Jim gets back to you, or skip the
      form and call.</p>
      <a class="quote-call" href="tel:+15184417742">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 3h3l2 5-2.5 1.5a11 11 0 005 5L15 12l5 2v3a2 2 0 01-2.2 2C11 18.4 5.6 13 5 6.2A2 2 0 016 3z"/></svg>
        <span><b>(518) 441-7742</b><em>or (518) 755-2770</em></span>
      </a>
      <a class="quote-mail" href="mailto:jim@wedowaterweeds.com">jim@wedowaterweeds.com</a>

      <div class="minis">
        <div class="mini">
          <h3 class="mini__h">Where we work</h3>
          <p class="mini__p">Based in the Hudson Valley, working throughout the Northeast — New York,
          New Jersey and Pennsylvania. Private ponds, lake associations, campgrounds, golf courses
          and municipal waterbodies. Ask us about your waterway wherever it is.</p>
        </div>
        <div class="mini">
          <h3 class="mini__h">Before you call</h3>
          <ul class="mini__list">
            <li><b>No herbicides, ever.</b> Everything is mechanical, so there's no waiting period
            before you can swim or fish.</li>
            <li><b>Harvesting is maintenance, not eradication.</b> Some regrowth is normal — most
            clients settle into once or twice a season.</li>
            <li><b>Book early.</b> Water chestnut has to come out before it drops seed, and the
            calendar fills from spring on.</li>
            <li><b>Permits vary</b> by waterbody and species. We'll tell you where you stand before
            we quote.</li>
          </ul>
        </div>
      </div>
    </div>

    <form class="form reveal" id="quoteForm" novalidate>
      <div class="form__row">
        <label class="field">
          <span class="field__label">Name</span>
          <input class="field__input" type="text" name="name" required autocomplete="name" placeholder="Jane Doe">
          <span class="field__err"></span>
        </label>
        <label class="field">
          <span class="field__label">Phone</span>
          <input class="field__input" type="tel" name="phone" required autocomplete="tel" placeholder="(518) 000-0000">
          <span class="field__err"></span>
        </label>
      </div>
      <label class="field">
        <span class="field__label">Email</span>
        <input class="field__input" type="email" name="email" required autocomplete="email" placeholder="you@email.com">
        <span class="field__err"></span>
      </label>
      <div class="form__row">
        <label class="field">
          <span class="field__label">Lake or pond</span>
          <input class="field__input" type="text" name="water" placeholder="e.g. Copake Lake">
        </label>
        <label class="field">
          <span class="field__label">Rough area</span>
          <select class="field__input" name="area">
            <option value="">Select&hellip;</option>
            <option>Under 100 ft of shoreline</option>
            <option>100&ndash;300 ft of shoreline</option>
            <option>300 ft &ndash; 1 acre</option>
            <option>Over an acre</option>
            <option>Not sure</option>
          </select>
        </label>
      </div>
      <fieldset class="chips">
        <legend class="field__label">What's growing? (pick any)</legend>
        <label class="chip"><input type="checkbox" name="weed[]" value="Milfoil"><span>Milfoil</span></label>
        <label class="chip"><input type="checkbox" name="weed[]" value="Water chestnut"><span>Water chestnut</span></label>
        <label class="chip"><input type="checkbox" name="weed[]" value="Hydrilla"><span>Hydrilla</span></label>
        <label class="chip"><input type="checkbox" name="weed[]" value="Lily pads"><span>Lily pads</span></label>
        <label class="chip"><input type="checkbox" name="weed[]" value="Cattails"><span>Cattails</span></label>
        <label class="chip"><input type="checkbox" name="weed[]" value="Algae"><span>Algae</span></label>
        <label class="chip"><input type="checkbox" name="weed[]" value="No idea"><span>No idea</span></label>
      </fieldset>
      <label class="field">
        <span class="field__label">Anything else</span>
        <textarea class="field__input" name="notes" rows="3" placeholder="Dock in the way, access notes, when you'd like it done&hellip;"></textarea>
      </label>

      <?php // Honeypot — hidden from people, filled in by bots. ?>
      <div class="hp" aria-hidden="true">
        <label>Website<input type="text" name="awh_url" tabindex="-1" autocomplete="off"></label>
      </div>

      <button class="btn btn--primary btn--lg btn--block" type="submit">Send my request</button>
      <p class="form__ok" id="formOk" hidden>Thanks — that's through. Jim will be in touch shortly.</p>
    </form>
  </div>
</section>

</main>

<?php
get_footer();
